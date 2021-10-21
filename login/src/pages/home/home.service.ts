import { Injectable } from '@angular/core';
import { Http, Response } from '@angular/http';

import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/map';

import { HomePage } from './home';

@Injectable()
export class HomeService {

  constructor(public http: Http) {

  };

  getFunctions(user) {
    let urlDest = "http://127.0.0.1/api-php/login.php?username=" + user.username + "&password=" + user.password;
    return this.http.get(urlDest)
              .map( (res:Response) => res.json());
  }

}