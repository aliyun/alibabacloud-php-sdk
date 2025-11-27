<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeResourceDetailsResponseBody\rdsEcsSecurityGroupRel;

class DescribeResourceDetailsResponseBody extends Model
{
    /**
     * @var int
     */
    public $backupDataSize;

    /**
     * @var int
     */
    public $backupLogSize;

    /**
     * @var int
     */
    public $backupSize;

    /**
     * @var int
     */
    public $dbInstanceStorage;

    /**
     * @var string
     */
    public $dbProxyInstanceName;

    /**
     * @var int
     */
    public $diskUsed;

    /**
     * @var string
     */
    public $instanceStorageType;

    /**
     * @var rdsEcsSecurityGroupRel[]
     */
    public $rdsEcsSecurityGroupRel;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'backupDataSize' => 'BackupDataSize',
        'backupLogSize' => 'BackupLogSize',
        'backupSize' => 'BackupSize',
        'dbInstanceStorage' => 'DbInstanceStorage',
        'dbProxyInstanceName' => 'DbProxyInstanceName',
        'diskUsed' => 'DiskUsed',
        'instanceStorageType' => 'InstanceStorageType',
        'rdsEcsSecurityGroupRel' => 'RdsEcsSecurityGroupRel',
        'region' => 'Region',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'securityIPList' => 'SecurityIPList',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->rdsEcsSecurityGroupRel)) {
            Model::validateArray($this->rdsEcsSecurityGroupRel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupDataSize) {
            $res['BackupDataSize'] = $this->backupDataSize;
        }

        if (null !== $this->backupLogSize) {
            $res['BackupLogSize'] = $this->backupLogSize;
        }

        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }

        if (null !== $this->dbInstanceStorage) {
            $res['DbInstanceStorage'] = $this->dbInstanceStorage;
        }

        if (null !== $this->dbProxyInstanceName) {
            $res['DbProxyInstanceName'] = $this->dbProxyInstanceName;
        }

        if (null !== $this->diskUsed) {
            $res['DiskUsed'] = $this->diskUsed;
        }

        if (null !== $this->instanceStorageType) {
            $res['InstanceStorageType'] = $this->instanceStorageType;
        }

        if (null !== $this->rdsEcsSecurityGroupRel) {
            if (\is_array($this->rdsEcsSecurityGroupRel)) {
                $res['RdsEcsSecurityGroupRel'] = [];
                $n1 = 0;
                foreach ($this->rdsEcsSecurityGroupRel as $item1) {
                    $res['RdsEcsSecurityGroupRel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['BackupDataSize'])) {
            $model->backupDataSize = $map['BackupDataSize'];
        }

        if (isset($map['BackupLogSize'])) {
            $model->backupLogSize = $map['BackupLogSize'];
        }

        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }

        if (isset($map['DbInstanceStorage'])) {
            $model->dbInstanceStorage = $map['DbInstanceStorage'];
        }

        if (isset($map['DbProxyInstanceName'])) {
            $model->dbProxyInstanceName = $map['DbProxyInstanceName'];
        }

        if (isset($map['DiskUsed'])) {
            $model->diskUsed = $map['DiskUsed'];
        }

        if (isset($map['InstanceStorageType'])) {
            $model->instanceStorageType = $map['InstanceStorageType'];
        }

        if (isset($map['RdsEcsSecurityGroupRel'])) {
            if (!empty($map['RdsEcsSecurityGroupRel'])) {
                $model->rdsEcsSecurityGroupRel = [];
                $n1 = 0;
                foreach ($map['RdsEcsSecurityGroupRel'] as $item1) {
                    $model->rdsEcsSecurityGroupRel[$n1] = rdsEcsSecurityGroupRel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
