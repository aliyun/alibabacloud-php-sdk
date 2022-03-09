<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class CustomFindOrderRequest extends Model
{
    /**
     * @var string
     */
    public $orderIdCipher;

    /**
     * @var string
     */
    public $orderName;

    /**
     * @var string
     */
    public $orderState;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $sort;
    protected $_name = [
        'orderIdCipher' => 'OrderIdCipher',
        'orderName'     => 'OrderName',
        'orderState'    => 'OrderState',
        'page'          => 'Page',
        'size'          => 'Size',
        'sort'          => 'Sort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderIdCipher) {
            $res['OrderIdCipher'] = $this->orderIdCipher;
        }
        if (null !== $this->orderName) {
            $res['OrderName'] = $this->orderName;
        }
        if (null !== $this->orderState) {
            $res['OrderState'] = $this->orderState;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CustomFindOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderIdCipher'])) {
            $model->orderIdCipher = $map['OrderIdCipher'];
        }
        if (isset($map['OrderName'])) {
            $model->orderName = $map['OrderName'];
        }
        if (isset($map['OrderState'])) {
            $model->orderState = $map['OrderState'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        return $model;
    }
}
