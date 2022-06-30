<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class CreateCapacityReservationRequest extends Model
{
    /**
     * @description 自定义会话id
     *
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $districtId;

    /**
     * @var string
     */
    public $expectResourceReadyTime;

    /**
     * @var int
     */
    public $expectSessionCapacity;

    /**
     * @description 平台会话id
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'appId'                   => 'AppId',
        'appVersion'              => 'AppVersion',
        'clientToken'             => 'ClientToken',
        'districtId'              => 'DistrictId',
        'expectResourceReadyTime' => 'ExpectResourceReadyTime',
        'expectSessionCapacity'   => 'ExpectSessionCapacity',
        'projectId'               => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->districtId) {
            $res['DistrictId'] = $this->districtId;
        }
        if (null !== $this->expectResourceReadyTime) {
            $res['ExpectResourceReadyTime'] = $this->expectResourceReadyTime;
        }
        if (null !== $this->expectSessionCapacity) {
            $res['ExpectSessionCapacity'] = $this->expectSessionCapacity;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCapacityReservationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DistrictId'])) {
            $model->districtId = $map['DistrictId'];
        }
        if (isset($map['ExpectResourceReadyTime'])) {
            $model->expectResourceReadyTime = $map['ExpectResourceReadyTime'];
        }
        if (isset($map['ExpectSessionCapacity'])) {
            $model->expectSessionCapacity = $map['ExpectSessionCapacity'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
