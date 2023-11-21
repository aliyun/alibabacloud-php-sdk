<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeResourceDetailsResponseBody\rdsEcsSecurityGroupRel;
use AlibabaCloud\Tea\Model;

class DescribeResourceDetailsResponseBody extends Model
{
    /**
     * @description The storage that is occupied by data backup files, excluding archived backup files, on the instance. Unit: bytes.
     *
     * @example 8139046912
     *
     * @var int
     */
    public $backupDataSize;

    /**
     * @description The storage that is occupied by log backup files, excluding archived backup files, on the instance. Unit: bytes.
     *
     * @example 21183797
     *
     * @var int
     */
    public $backupLogSize;

    /**
     * @description The storage that is used to store backup files. Unit: bytes. The value -1 indicates that no backup files are stored.
     *
     * @example 53002759
     *
     * @var int
     */
    public $backupSize;

    /**
     * @description Database Storage.
     *
     * @example 200
     *
     * @var int
     */
    public $dbInstanceStorage;

    /**
     * @description ProxyInstance name.
     *
     * @example mr-n1m1wjrylfolvrt67s
     *
     * @var string
     */
    public $dbProxyInstanceName;

    /**
     * @description The total storage that is occupied by data files and log files on the instance. Unit: bytes. The value -1 indicates that no data files or log files are stored on the instance.
     *
     * @example 4871684096
     *
     * @var int
     */
    public $diskUsed;

    /**
     * @description Instance StorageType
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $instanceStorageType;

    /**
     * @description Whitelist Rules.
     *
     * @var rdsEcsSecurityGroupRel[]
     */
    public $rdsEcsSecurityGroupRel;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description Id of the request
     *
     * @example EA815761-F7AC-5CFE-A1AC-709D6A00B58A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmv3h25bj7yhq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The IP address whitelist of the serverless instance. For more information, see [Use a database client or the CLI to connect to an ApsaraDB RDS for PostgreSQL instance](~~43185~~). If the IP address whitelist contains more than one entry, separate the entries with commas (,). Each entry must be unique. You can specify up to 1,000 entries. The entries in the IP address whitelist must be in one of the following formats:
     *
     *   IP addresses, such as 10.10.XX.XX.
     *   CIDR blocks, such as 10.10.XX.XX/24. In this example, 24 indicates that the prefix of each IP address in the IP address whitelist is 24 bits in length. You can replace 24 with a value within the range of 1 to 32.
     *
     * If this parameter is not specified, the default IP address whitelist is used.
     * @example 172.16.1.14,172.16.1.13,172.16.1.44,172.16.1.43,172.16.1.74,172.16.1.73
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-2zelwi1jd271p670lzl8h
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description VPC ID.
     *
     * @example vpc-wz9rbibex7v0lxbeyo6at
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'backupDataSize'         => 'BackupDataSize',
        'backupLogSize'          => 'BackupLogSize',
        'backupSize'             => 'BackupSize',
        'dbInstanceStorage'      => 'DbInstanceStorage',
        'dbProxyInstanceName'    => 'DbProxyInstanceName',
        'diskUsed'               => 'DiskUsed',
        'instanceStorageType'    => 'InstanceStorageType',
        'rdsEcsSecurityGroupRel' => 'RdsEcsSecurityGroupRel',
        'region'                 => 'Region',
        'requestId'              => 'RequestId',
        'resourceGroupId'        => 'ResourceGroupId',
        'securityIPList'         => 'SecurityIPList',
        'vSwitchId'              => 'VSwitchId',
        'vpcId'                  => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['RdsEcsSecurityGroupRel'] = [];
            if (null !== $this->rdsEcsSecurityGroupRel && \is_array($this->rdsEcsSecurityGroupRel)) {
                $n = 0;
                foreach ($this->rdsEcsSecurityGroupRel as $item) {
                    $res['RdsEcsSecurityGroupRel'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeResourceDetailsResponseBody
     */
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
                $n                             = 0;
                foreach ($map['RdsEcsSecurityGroupRel'] as $item) {
                    $model->rdsEcsSecurityGroupRel[$n++] = null !== $item ? rdsEcsSecurityGroupRel::fromMap($item) : $item;
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
