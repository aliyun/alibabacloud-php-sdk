<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest;

use AlibabaCloud\Tea\Model;

class workerDataDisks extends Model
{
    /**
     * @example cloud_essd
     *
     * @var string
     */
    public $category;

    /**
     * @example true
     *
     * @var string
     */
    public $encrypted;

    /**
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @example 120
     *
     * @var string
     */
    public $size;
    protected $_name = [
        'category'         => 'category',
        'encrypted'        => 'encrypted',
        'performanceLevel' => 'performance_level',
        'size'             => 'size',
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
        if (null !== $this->encrypted) {
            $res['encrypted'] = $this->encrypted;
        }
        if (null !== $this->performanceLevel) {
            $res['performance_level'] = $this->performanceLevel;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workerDataDisks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['encrypted'])) {
            $model->encrypted = $map['encrypted'];
        }
        if (isset($map['performance_level'])) {
            $model->performanceLevel = $map['performance_level'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
