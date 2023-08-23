<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListInfraredDeviceBrandsRequest extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $serviceProvider;
    protected $_name = [
        'category'        => 'Category',
        'serviceProvider' => 'ServiceProvider',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->serviceProvider) {
            $res['ServiceProvider'] = $this->serviceProvider;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInfraredDeviceBrandsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ServiceProvider'])) {
            $model->serviceProvider = $map['ServiceProvider'];
        }

        return $model;
    }
}
