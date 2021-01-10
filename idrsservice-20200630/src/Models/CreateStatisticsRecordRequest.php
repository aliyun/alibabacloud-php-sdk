<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class CreateStatisticsRecordRequest extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $deviceType;

    /**
     * @var string
     */
    public $beginAt;

    /**
     * @var string
     */
    public $endAt;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'deviceId'    => 'DeviceId',
        'appId'       => 'AppId',
        'deviceType'  => 'DeviceType',
        'beginAt'     => 'BeginAt',
        'endAt'       => 'EndAt',
        'clientToken' => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->beginAt) {
            $res['BeginAt'] = $this->beginAt;
        }
        if (null !== $this->endAt) {
            $res['EndAt'] = $this->endAt;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStatisticsRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['BeginAt'])) {
            $model->beginAt = $map['BeginAt'];
        }
        if (isset($map['EndAt'])) {
            $model->endAt = $map['EndAt'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
