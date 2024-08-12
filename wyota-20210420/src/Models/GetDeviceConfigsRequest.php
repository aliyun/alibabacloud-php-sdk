<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceConfigsRequest extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $serialNo;

    /**
     * @var string
     */
    public $urclVersion;

    /**
     * @var string
     */
    public $userCustomId;
    protected $_name = [
        'deviceId'     => 'DeviceId',
        'networkType'  => 'NetworkType',
        'region'       => 'Region',
        'serialNo'     => 'SerialNo',
        'urclVersion'  => 'UrclVersion',
        'userCustomId' => 'UserCustomId',
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
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }
        if (null !== $this->urclVersion) {
            $res['UrclVersion'] = $this->urclVersion;
        }
        if (null !== $this->userCustomId) {
            $res['UserCustomId'] = $this->userCustomId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }
        if (isset($map['UrclVersion'])) {
            $model->urclVersion = $map['UrclVersion'];
        }
        if (isset($map['UserCustomId'])) {
            $model->userCustomId = $map['UserCustomId'];
        }

        return $model;
    }
}
