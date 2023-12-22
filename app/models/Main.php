<?php

namespace app\models;

use \wfm\Model;
use RedBeanPhp\R;

class Main extends AppModel
{

    public function get_hits($lang, $limit): array
    {
        return R::getAll("SELECT product.*, product_description.* FROM product JOIN product_description
                         on product.id = product_description.product_id WHERE product.status = 1 AND
                         product.hit = 1 AND product_description.language_id = ? LIMIT $limit", [$lang]);
    }

}
