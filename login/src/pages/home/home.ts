import { Component } from '@angular/core';
import { NavController, ViewController } from 'ionic-angular';

import { HomeService } from './home.service';
import { MenuPage } from '../menu/menu';


export class User {
  username: string;
  password: string;
}


@Component({
    selector: 'page-home',
    templateUrl: 'home.html',
    providers: [
      HomeService
    ]
})

export class HomePage {

  user: User = {
    username: '',
    password: ''
  }


  
  items:any;


    constructor(public navCtrl: NavController, public service: HomeService) { }

    login() {
        this.service.getFunctions(this.user)
                    .subscribe(
                        datas => {
                              if(datas.result){
                                
                                  this.navCtrl.push(MenuPage, {
                                      username: datas.dados.id
                                  })
                                  
                              }else{ 
                              
                              alert("usuario ou senha inválido")
                              
                              
                              }
        });

    }
}