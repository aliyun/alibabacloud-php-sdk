<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntElementVerifyResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $bizCode;

    /**
     * @var string
     */
    public $openTime;

    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $reasonDetail;

    /**
     * @example 1
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'bizCode'      => 'BizCode',
        'openTime'     => 'OpenTime',
        'reasonCode'   => 'ReasonCode',
        'reasonDetail' => 'ReasonDetail',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->openTime) {
            $res['OpenTime'] = $this->openTime;
        }
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }
        if (null !== $this->reasonDetail) {
            $res['ReasonDetail'] = $this->reasonDetail;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['OpenTime'])) {
            $model->openTime = $map['OpenTime'];
        }
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }
        if (isset($map['ReasonDetail'])) {
            $model->reasonDetail = $map['ReasonDetail'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
