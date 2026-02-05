<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponseBody\data\list_\performanceOrders;

use AlibabaCloud\Dara\Model;

class performanceNodeDTOS extends Model
{
    /**
     * @var bool
     */
    public $display;

    /**
     * @var mixed
     */
    public $extendInfo;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'display' => 'display',
        'extendInfo' => 'extendInfo',
        'index' => 'index',
        'nodeName' => 'nodeName',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->display) {
            $res['display'] = $this->display;
        }

        if (null !== $this->extendInfo) {
            $res['extendInfo'] = $this->extendInfo;
        }

        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->nodeName) {
            $res['nodeName'] = $this->nodeName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['display'])) {
            $model->display = $map['display'];
        }

        if (isset($map['extendInfo'])) {
            $model->extendInfo = $map['extendInfo'];
        }

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['nodeName'])) {
            $model->nodeName = $map['nodeName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
