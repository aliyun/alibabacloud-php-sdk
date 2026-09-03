<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models;

use AlibabaCloud\Dara\Model;

class CreateMultiModelKnowledgeBaseRequest extends Model
{
    /**
     * @var string
     */
    public $adbInstanceName;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var int
     */
    public $dbClusterAcu;

    /**
     * @var string
     */
    public $lakeStorageBucketName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceAcuMax;

    /**
     * @var int
     */
    public $resourceAcuMin;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'adbInstanceName' => 'AdbInstanceName',
        'DBClusterId' => 'DBClusterId',
        'dbClusterAcu' => 'DbClusterAcu',
        'lakeStorageBucketName' => 'LakeStorageBucketName',
        'regionId' => 'RegionId',
        'resourceAcuMax' => 'ResourceAcuMax',
        'resourceAcuMin' => 'ResourceAcuMin',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adbInstanceName) {
            $res['AdbInstanceName'] = $this->adbInstanceName;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->dbClusterAcu) {
            $res['DbClusterAcu'] = $this->dbClusterAcu;
        }

        if (null !== $this->lakeStorageBucketName) {
            $res['LakeStorageBucketName'] = $this->lakeStorageBucketName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceAcuMax) {
            $res['ResourceAcuMax'] = $this->resourceAcuMax;
        }

        if (null !== $this->resourceAcuMin) {
            $res['ResourceAcuMin'] = $this->resourceAcuMin;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdbInstanceName'])) {
            $model->adbInstanceName = $map['AdbInstanceName'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DbClusterAcu'])) {
            $model->dbClusterAcu = $map['DbClusterAcu'];
        }

        if (isset($map['LakeStorageBucketName'])) {
            $model->lakeStorageBucketName = $map['LakeStorageBucketName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceAcuMax'])) {
            $model->resourceAcuMax = $map['ResourceAcuMax'];
        }

        if (isset($map['ResourceAcuMin'])) {
            $model->resourceAcuMin = $map['ResourceAcuMin'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
