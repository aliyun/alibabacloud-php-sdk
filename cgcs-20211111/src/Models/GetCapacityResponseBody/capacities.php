<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\GetCapacityResponseBody;

use AlibabaCloud\Tea\Model;

class capacities extends Model
{
    /**
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
     * @example huadong
     *
     * @var string
     */
    public $districtId;

    /**
     * @example d9a8****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 2
     *
     * @var int
     */
    public $sessionCapacity;
    protected $_name = [
        'appId'           => 'AppId',
        'appVersion'      => 'AppVersion',
        'districtId'      => 'DistrictId',
        'projectId'       => 'ProjectId',
        'sessionCapacity' => 'SessionCapacity',
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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->sessionCapacity) {
            $res['SessionCapacity'] = $this->sessionCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacities
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SessionCapacity'])) {
            $model->sessionCapacity = $map['SessionCapacity'];
        }

        return $model;
    }
}
