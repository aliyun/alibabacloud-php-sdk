<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Tea\Model;

class CreateDBInstanceShrinkRequest extends Model
{
    /**
     * @example AB
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @example clickhouse
     *
     * @var string
     */
    public $engine;

    /**
     * @example 23.8
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $multiZoneShrink;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 32
     *
     * @var string
     */
    public $scaleMax;

    /**
     * @example 8
     *
     * @var string
     */
    public $scaleMin;

    /**
     * @description VPC ID。
     *
     * @example vpc-uf6xmupdn7v6ui9f****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vsw-uf632qye9oqt4x4sr****
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clientToken'           => 'ClientToken',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'multiZoneShrink'       => 'MultiZone',
        'regionId'              => 'RegionId',
        'scaleMax'              => 'ScaleMax',
        'scaleMin'              => 'ScaleMin',
        'vpcId'                 => 'VpcId',
        'vswitchId'             => 'VswitchId',
        'zoneId'                => 'ZoneId',
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
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->multiZoneShrink) {
            $res['MultiZone'] = $this->multiZoneShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }
        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['MultiZone'])) {
            $model->multiZoneShrink = $map['MultiZone'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }
        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
