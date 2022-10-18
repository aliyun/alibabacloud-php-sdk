<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models;

use AlibabaCloud\Tea\Model;

class ListCategoriesRequest extends Model
{
    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $productId;
    protected $_name = [
        'language'  => 'Language',
        'name'      => 'Name',
        'productId' => 'ProductId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCategoriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        return $model;
    }
}
