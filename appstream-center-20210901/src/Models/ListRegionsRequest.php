<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListRegionsRequest extends Model
{
    /**
     * @var string
     */
    public $bizSource;
    /**
     * @var string
     */
    public $productType;
    protected $_name = [
        'bizSource'   => 'BizSource',
        'productType' => 'ProductType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizSource) {
            $res['BizSource'] = $this->bizSource;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizSource'])) {
            $model->bizSource = $map['BizSource'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
