<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class ReleaseCapacityRequest extends Model
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
     * @description This parameter is required.
     *
     * @example huadong
     *
     * @var string
     */
    public $districtId;

    /**
     * @description This parameter is required.
     *
     * @example 100
     *
     * @var int
     */
    public $expectReleaseSessionCapacity;

    /**
     * @description This parameter is required.
     *
     * @example d9a8****
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'appId'                        => 'AppId',
        'appVersion'                   => 'AppVersion',
        'districtId'                   => 'DistrictId',
        'expectReleaseSessionCapacity' => 'ExpectReleaseSessionCapacity',
        'projectId'                    => 'ProjectId',
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
        if (null !== $this->districtId) {
            $res['DistrictId'] = $this->districtId;
        }
        if (null !== $this->expectReleaseSessionCapacity) {
            $res['ExpectReleaseSessionCapacity'] = $this->expectReleaseSessionCapacity;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseCapacityRequest
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
        if (isset($map['DistrictId'])) {
            $model->districtId = $map['DistrictId'];
        }
        if (isset($map['ExpectReleaseSessionCapacity'])) {
            $model->expectReleaseSessionCapacity = $map['ExpectReleaseSessionCapacity'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
