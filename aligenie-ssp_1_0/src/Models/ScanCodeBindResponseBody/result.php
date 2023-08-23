<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScanCodeBindResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example X1
     *
     * @var string
     */
    public $bizGroup;

    /**
     * @example AILABS
     *
     * @var string
     */
    public $bizType;

    /**
     * @description A963*0158
     *
     * @example 设备OpenId
     *
     * @var string
     */
    public $deviceOpenId;

    /**
     * @description DAFE****ce3ej=
     *
     * @example 用户opneId
     *
     * @var string
     */
    public $userOpenId;
    protected $_name = [
        'bizGroup'     => 'BizGroup',
        'bizType'      => 'BizType',
        'deviceOpenId' => 'DeviceOpenId',
        'userOpenId'   => 'UserOpenId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizGroup) {
            $res['BizGroup'] = $this->bizGroup;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->deviceOpenId) {
            $res['DeviceOpenId'] = $this->deviceOpenId;
        }
        if (null !== $this->userOpenId) {
            $res['UserOpenId'] = $this->userOpenId;
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
        if (isset($map['BizGroup'])) {
            $model->bizGroup = $map['BizGroup'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['DeviceOpenId'])) {
            $model->deviceOpenId = $map['DeviceOpenId'];
        }
        if (isset($map['UserOpenId'])) {
            $model->userOpenId = $map['UserOpenId'];
        }

        return $model;
    }
}
