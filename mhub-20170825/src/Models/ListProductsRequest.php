<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models;

use AlibabaCloud\Tea\Model;

class ListProductsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $productName;

    /**
     * @example false
     *
     * @var bool
     */
    public $simple;

    /**
     * @example 20
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'offset' => 'Offset',
        'productName' => 'ProductName',
        'simple' => 'Simple',
        'size' => 'Size',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->simple) {
            $res['Simple'] = $this->simple;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['Simple'])) {
            $model->simple = $map['Simple'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
