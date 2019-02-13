//https://phpenthusiast.com/blog/angular-php-app-creating-new-item-with-httpclient-post
import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

import { Hero } from '../hero';
import { HeroService } from '../services/hero.service';

@Component({
  selector: 'app-heroes',
  templateUrl: './heros.component.html',
  styleUrls: ['./heros.component.css']
})
export class HerosComponent implements OnInit {

  selectedHero: Hero;

  heroes: Hero[];

  constructor(private heroService: HeroService,private route: ActivatedRoute) { }

  ngOnInit() {
    const id = this.route.snapshot.paramMap.get('par1');
    alert(id);
    this.getHeroes();
  }

  /*onSelect(hero: Hero): void {
    this.selectedHero = hero;
  }*/

  getHeroes(): void {
    //this.heroes = this.heroService.getHeroes();
    this.heroService.getHeroes()
    .subscribe(heroes => {this.heroes = heroes});
  }


  save(heroi,nome): void {
    //alert(nome);
    this.heroService.updateHero(heroi)
      .subscribe(() => '');
  }


}