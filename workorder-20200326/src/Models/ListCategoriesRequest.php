<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200326\Models;

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
    public $productCode;
    protected $_name = [
        'language'    => 'Language',
        'productCode' => 'ProductCode',
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
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
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
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
