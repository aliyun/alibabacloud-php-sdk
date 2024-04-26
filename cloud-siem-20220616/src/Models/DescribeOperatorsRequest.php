<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DescribeOperatorsRequest extends Model
{
    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the regions in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var int
     */
    public $roleType;

    /**
     * @description The type of the scenario in which the operator is used. Valid values:
     *
     *   If you do not specify this parameter, the default scenario is used.
     *   AGGREGATE: AGGREGATE scenario.
     *
     * @example AGGREGATE
     *
     * @var string
     */
    public $sceneType;
    protected $_name = [
        'regionId'  => 'RegionId',
        'roleFor'   => 'RoleFor',
        'roleType'  => 'RoleType',
        'sceneType' => 'SceneType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }
        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOperatorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }
        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }

        return $model;
    }
}
