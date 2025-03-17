<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateDBInstanceRequest\multiZone;
use AlibabaCloud\Tea\Model;

class CreateDBInstanceRequest extends Model
{
    /**
     * @description The backup set ID.
     *
     * @example 1
     *
     * @var string
     */
    public $backupSetId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token. Make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example AB
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The cluster description.
     *
     * @example Used for test
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The deployment status of the cluster.
     *
     * @example multi_az
     *
     * @var string
     */
    public $deploySchema;

    /**
     * @description The engine type.
     *
     * Valid values:
     *
     *   clickhouse
     *
     * @example clickhouse
     *
     * @var string
     */
    public $engine;

    /**
     * @description The engine version.
     *
     * @example 23.8
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The configurations of multi-zone deployment.
     *
     * @var multiZone[]
     */
    public $multiZone;

    /**
     * @description The region ID
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The maximum capacity for auto scaling.
     *
     * @example 32
     *
     * @var string
     */
    public $scaleMax;

    /**
     * @description The minimum capacity for auto scaling.
     *
     * @example 8
     *
     * @var string
     */
    public $scaleMin;

    /**
     * @description The cluster ID.
     *
     * @example cc-2ze1*********
     *
     * @var string
     */
    public $sourceDBInstanceId;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * @example vpc-uf6xmupdn7v6ui9f****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-uf632qye9oqt4x4sr****
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'backupSetId' => 'BackupSetId',
        'clientToken' => 'ClientToken',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'deploySchema' => 'DeploySchema',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'multiZone' => 'MultiZone',
        'regionId' => 'RegionId',
        'scaleMax' => 'ScaleMax',
        'scaleMin' => 'ScaleMin',
        'sourceDBInstanceId' => 'SourceDBInstanceId',
        'vpcId' => 'VpcId',
        'vswitchId' => 'VswitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->deploySchema) {
            $res['DeploySchema'] = $this->deploySchema;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->multiZone) {
            $res['MultiZone'] = [];
            if (null !== $this->multiZone && \is_array($this->multiZone)) {
                $n = 0;
                foreach ($this->multiZone as $item) {
                    $res['MultiZone'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->sourceDBInstanceId) {
            $res['SourceDBInstanceId'] = $this->sourceDBInstanceId;
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
     * @return CreateDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DeploySchema'])) {
            $model->deploySchema = $map['DeploySchema'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['MultiZone'])) {
            if (!empty($map['MultiZone'])) {
                $model->multiZone = [];
                $n = 0;
                foreach ($map['MultiZone'] as $item) {
                    $model->multiZone[$n++] = null !== $item ? multiZone::fromMap($item) : $item;
                }
            }
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
        if (isset($map['SourceDBInstanceId'])) {
            $model->sourceDBInstanceId = $map['SourceDBInstanceId'];
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
