# contao-fleximages-bundle
This bundle integrates flexImages (https://github.com/Pixabay/JavaScript-flexImages) into the content element gallery.

The gallery gets the option **"flexImages verwenden"** under the image settings. The images are then arranged in rows: within a row every image keeps its aspect ratio, is scaled to a common height and the row fills the available width flush to both edges. The row height is derived from the first image of the gallery. The gap between the images can be adjusted with the CSS variable `--image-gap` (default `4px`).

<img width="1078" alt="Bildschirmfoto 2023-10-19 um 11 55 14" src="https://github.com/heimseiten/contao-fleximages-bundle/assets/6552484/8253dd76-e224-4048-bca0-5fb6b0417bf0">
