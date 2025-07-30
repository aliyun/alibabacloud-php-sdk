<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateDBInstanceRequest\multiZone;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\CreateDBInstanceRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateDBInstanceRequest extends Model
{
    /**
     * @description Specifies whether to add the virtual private cloud (VPC) CIDR block to the IP address whitelist. Valid values:
     *
     *   1: yes.
     *   0: no.
     *
     * @example 1
     *
     * @var string
     */
    public $addVPCIPs;

    /**
     * @description The reserved cache size.
     *
     * This parameter is required.
     *
     * @example 200GB
     *
     * @var int
     */
    public $cacheSize;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *
     * This parameter is required.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example AB
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $clusterNodeCount;

    /**
     * @var string
     */
    public $clusterNodeType;

    /**
     * @description The instance endpoint.
     *
     * @example selectdb-cn-7213c8y****-public.selectdbfe.pre.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The instance type. You can call the [DescribeAllDBInstanceClass](https://help.aliyun.com/document_detail/2853363.html) operation to query instance types.
     *
     * This parameter is required.
     *
     * @example selectdb.xlarge
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The instance description.
     *
     * @example The instance is created for testing.
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The deployment method of the instance.
     *
     * @example single_az
     *
     * @var string
     */
    public $deployScheme;

    /**
     * @description The database engine of the instance. Default value: **selectdb**.
     *
     * @example selectdb
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version of the instance. Default value: **3.0**.
     *
     * This parameter is required.
     *
     * @example 2.4
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The configurations of multi-zone deployment.
     *
     * >
     *
     *   This parameter takes effect and is required only when DeployScheme is set to multi_az.
     *
     * @var multiZone[]
     */
    public $multiZone;

    /**
     * @description The unit of the subscription duration of the cluster. Valid values:
     *
     *   **Year**: subscription on a yearly basis.
     *   **Month**: subscription on a monthly basis.
     *
     * >  This parameter takes effect and is required only when **ChargeType** is set to **Prepaid**.
     *
     * @example Month
     *
     * @var string
     */
    public $period;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-aekzt2zaluvuvqa_fake
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var float
     */
    public $scaleMax;

    /**
     * @var float
     */
    public $scaleMin;

    /**
     * @description The IP addresses in the whitelist of the instance. Separate multiple IP addresses with commas (,).
     *
     * @example 192.168.1.1
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description The instance tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The subscription duration of the instance. Valid values:
     *
     *   If Period is set to Year, valid values of UsedTime are 1, 2, 3, 4, and 5.
     *   If Period is set to Month, valid values of UsedTime are 1 to 12.
     *
     * >  This parameter takes effect and is required only when **ChargeType** is set to **Prepaid**.
     *
     * @example 1
     *
     * @var int
     */
    public $usedTime;

    /**
     * @description The vSwitch ID.
     *
     * This parameter is required.
     *
     * @example vsw-bp1gzt31twhlo0sa5****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * This parameter is required.
     *
     * @example vpc-bp175iuvg8nxqraf2****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'addVPCIPs' => 'AddVPCIPs',
        'cacheSize' => 'CacheSize',
        'chargeType' => 'ChargeType',
        'clientToken' => 'ClientToken',
        'clusterNodeCount' => 'ClusterNodeCount',
        'clusterNodeType' => 'ClusterNodeType',
        'connectionString' => 'ConnectionString',
        'DBInstanceClass' => 'DBInstanceClass',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'deployScheme' => 'DeployScheme',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'multiZone' => 'MultiZone',
        'period' => 'Period',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scaleMax' => 'ScaleMax',
        'scaleMin' => 'ScaleMin',
        'securityIPList' => 'SecurityIPList',
        'tag' => 'Tag',
        'usedTime' => 'UsedTime',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addVPCIPs) {
            $res['AddVPCIPs'] = $this->addVPCIPs;
        }
        if (null !== $this->cacheSize) {
            $res['CacheSize'] = $this->cacheSize;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->clusterNodeCount) {
            $res['ClusterNodeCount'] = $this->clusterNodeCount;
        }
        if (null !== $this->clusterNodeType) {
            $res['ClusterNodeType'] = $this->clusterNodeType;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->deployScheme) {
            $res['DeployScheme'] = $this->deployScheme;
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
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }
        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
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

    /**
     * @param array $map
     *
     * @return CreateDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddVPCIPs'])) {
            $model->addVPCIPs = $map['AddVPCIPs'];
        }
        if (isset($map['CacheSize'])) {
            $model->cacheSize = $map['CacheSize'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ClusterNodeCount'])) {
            $model->clusterNodeCount = $map['ClusterNodeCount'];
        }
        if (isset($map['ClusterNodeType'])) {
            $model->clusterNodeType = $map['ClusterNodeType'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DeployScheme'])) {
            $model->deployScheme = $map['DeployScheme'];
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
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }
        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
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
