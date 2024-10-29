<?php

namespace app\models;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
        public static function tableName()
        {
            return 'Categories';
        }

        public function getProducts()
        {
            return $this->hasMany(Product::class, ['product_id' => 'id']);
        }


}