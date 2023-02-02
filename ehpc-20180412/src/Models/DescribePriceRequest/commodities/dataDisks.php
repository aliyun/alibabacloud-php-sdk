<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceRequest\commodities;

use AlibabaCloud\Tea\Model;

class dataDisks extends Model
{
    /**
     * @example cloud_efficiency
     *
     * @var string
     */
    public $category;

    /**
     * @example true
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @example false
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @example 40
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'category'           => 'category',
        'deleteWithInstance' => 'deleteWithInstance',
        'encrypted'          => 'encrypted',
        'performanceLevel'   => 'performanceLevel',
        'size'               => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->deleteWithInstance) {
            $res['deleteWithInstance'] = $this->deleteWithInstance;
        }
        if (null !== $this->encrypted) {
            $res['encrypted'] = $this->encrypted;
        }
        if (null !== $this->performanceLevel) {
            $res['performanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDisks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['deleteWithInstance'])) {
            $model->deleteWithInstance = $map['deleteWithInstance'];
        }
        if (isset($map['encrypted'])) {
            $model->encrypted = $map['encrypted'];
        }
        if (isset($map['performanceLevel'])) {
            $model->performanceLevel = $map['performanceLevel'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
