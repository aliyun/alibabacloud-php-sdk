<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DescribeAddonReleaseRequest extends Model
{
    /**
     * @description The environment ID.
     *
     * This parameter is required.
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the add-on release.
     *
     * This parameter is required.
     * @example agent-822567d4-2449
     *
     * @var string
     */
    public $releaseName;
    protected $_name = [
        'environmentId' => 'EnvironmentId',
        'regionId'      => 'RegionId',
        'releaseName'   => 'ReleaseName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->releaseName) {
            $res['ReleaseName'] = $this->releaseName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAddonReleaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReleaseName'])) {
            $model->releaseName = $map['ReleaseName'];
        }

        return $model;
    }
}
