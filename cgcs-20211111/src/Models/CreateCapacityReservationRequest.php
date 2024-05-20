<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class CreateCapacityReservationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 13027****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 35067****
     *
     * @var string
     */
    public $appVersion;

    /**
     * @example 2YEF0****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @example huadong
     *
     * @var string
     */
    public $districtId;

    /**
     * @example 2022-02-02 22:22:22
     *
     * @deprecated
     *
     * @var string
     */
    public $expectResourceReadyTime;

    /**
     * @description This parameter is required.
     *
     * @example 100
     *
     * @var int
     */
    public $expectSessionCapacity;

    /**
     * @description This parameter is required.
     *
     * @example d9a8****
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
