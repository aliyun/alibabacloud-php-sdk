<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeApDevicesResponseBody;

use AlibabaCloud\Tea\Model;

class apDevices extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $beActivate;

    /**
     * @example 112233445566
     *
     * @var string
     */
    public $mac;

    /**
     * @example aliyun
     *
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example false
     *
     * @var bool
     */
    public $status;

    /**
     * @example s-cxsds****
     *
     * @var string
     */
    public $storeId;
    protected $_name = [
        'beActivate' => 'BeActivate',
        'mac'        => 'Mac',
        'model'      => 'Model',
        'remark'     => 'Remark',
        'status'     => 'Status',
        'storeId'    => 'StoreId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beActivate) {
            $res['BeActivate'] = $this->beActivate;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apDevices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeActivate'])) {
            $model->beActivate = $map['BeActivate'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }

        return $model;
    }
}
