# Analyse du thème

Une visualisation des blocs du thème:

## Mise en page

La largeur de page est limitée à 768px pour les Articles:

```css
@media (min-width: 896px)
  .single .content,
  .contact-page .content {
		width: 768px;
	}
	
```

Cela donne des longueurs de ligne allant à 80 caractères.

Pour les Pages, la limite maximale est de 1152px:

```css
@media (min-width: 768px)
.content-sidebar-wrap, .wrap {
    width: 88%;
    max-width: 1152px;
    padding-right: 0;
    padding-left: 0;
}
```

À cette largeur, on a des longueurs de 129 caractères. Il faut donc réduire la largeur.

Nous mettons un maximum à .content-sidebar-wrap.