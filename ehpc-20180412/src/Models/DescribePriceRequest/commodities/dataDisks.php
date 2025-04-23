<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceRequest\commodities;

use AlibabaCloud\Dara\Model;

class dataDisks extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var string
     */
    public $performanceLevel;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'category' => 'category',
        'deleteWithInstance' => 'deleteWithInstance',
        'encrypted' => 'encrypted',
        'performanceLevel' => 'performanceLevel',
        'size' => 'size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
