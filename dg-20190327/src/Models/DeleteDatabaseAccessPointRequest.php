<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dg\V20190327\Models;

use AlibabaCloud\Tea\Model;

class DeleteDatabaseAccessPointRequest extends Model
{
    /**
     * @example dg-db-abcd123
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example vsw-123abcd
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $vpcAZone;

    /**
     * @example vpc-123abcd
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vpcRegionId;
    protected $_name = [
        'dbInstanceId' => 'DbInstanceId',
        'regionId'     => 'RegionId',
        'vSwitchId'    => 'VSwitchId',
        'vpcAZone'     => 'VpcAZone',
        'vpcId'        => 'VpcId',
        'vpcRegionId'  => 'VpcRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcAZone) {
            $res['VpcAZone'] = $this->vpcAZone;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcRegionId) {
            $res['VpcRegionId'] = $this->vpcRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDatabaseAccessPointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcAZone'])) {
            $model->vpcAZone = $map['VpcAZone'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcRegionId'])) {
            $model->vpcRegionId = $map['VpcRegionId'];
        }

        return $model;
    }
}
