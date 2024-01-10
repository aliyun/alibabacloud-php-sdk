<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dg\V20190327\Models;

use AlibabaCloud\Tea\Model;

class CreateDatabaseAccessPointRequest extends Model
{
    /**
     * @example ETnLKlblzczshOTUbOCzxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example dg-db-abcd1234
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
        'clientToken'  => 'ClientToken',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
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
     * @return CreateDatabaseAccessPointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
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
