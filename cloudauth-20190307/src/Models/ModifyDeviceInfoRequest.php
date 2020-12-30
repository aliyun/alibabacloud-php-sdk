<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class ModifyDeviceInfoRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $userDeviceId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $expiredDay;
    protected $_name = [
        'sourceIp'     => 'SourceIp',
        'lang'         => 'Lang',
        'deviceId'     => 'DeviceId',
        'userDeviceId' => 'UserDeviceId',
        'bizType'      => 'BizType',
        'duration'     => 'Duration',
        'expiredDay'   => 'ExpiredDay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->userDeviceId) {
            $res['UserDeviceId'] = $this->userDeviceId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->expiredDay) {
            $res['ExpiredDay'] = $this->expiredDay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDeviceInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['UserDeviceId'])) {
            $model->userDeviceId = $map['UserDeviceId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ExpiredDay'])) {
            $model->expiredDay = $map['ExpiredDay'];
        }

        return $model;
    }
}
