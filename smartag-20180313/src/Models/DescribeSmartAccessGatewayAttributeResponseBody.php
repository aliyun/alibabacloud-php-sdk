<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody\aclIds;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody\applicationBandwidthPackageOperationLocks;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody\devices;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody\flowLogIds;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody\IRIds;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody\links;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody\qosIds;

class DescribeSmartAccessGatewayAttributeResponseBody extends Model
{
    /**
     * @var int
     */
    public $accelerateBandwidth;

    /**
     * @var string
     */
    public $accessPointId;

    /**
     * @var aclIds
     */
    public $aclIds;

    /**
     * @var string
     */
    public $applicationBandwidthPackageBussinessStatus;

    /**
     * @var string
     */
    public $applicationBandwidthPackageId;

    /**
     * @var string
     */
    public $applicationBandwidthPackageName;

    /**
     * @var applicationBandwidthPackageOperationLocks
     */
    public $applicationBandwidthPackageOperationLocks;

    /**
     * @var string
     */
    public $associatedCcnId;

    /**
     * @var string
     */
    public $associatedCcnName;

    /**
     * @var string
     */
    public $backupBoxControllerIp;

    /**
     * @var string
     */
    public $boxControllerIp;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $city;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $dataPlan;

    /**
     * @var string
     */
    public $description;

    /**
     * @var devices
     */
    public $devices;

    /**
     * @var bool
     */
    public $enableOptimization;

    /**
     * @var bool
     */
    public $enableSoftwareConnectionAudit;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var flowLogIds
     */
    public $flowLogIds;

    /**
     * @var IRIds
     */
    public $IRIds;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $ipsecStatus;

    /**
     * @var links
     */
    public $links;

    /**
     * @var string
     */
    public $maxBandwidth;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $optimizationType;

    /**
     * @var string
     */
    public $position;

    /**
     * @var qosIds
     */
    public $qosIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resellerInstanceId;

    /**
     * @var string
     */
    public $resellerUid;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $routingStrategy;

    /**
     * @var int
     */
    public $securityLockThreshold;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $trafficMasterSn;

    /**
     * @var int
     */
    public $upBandwidth4G;

    /**
     * @var int
     */
    public $upBandwidthWan;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @var string
     */
    public $vpnStatus;
    protected $_name = [
        'accelerateBandwidth' => 'AccelerateBandwidth',
        'accessPointId' => 'AccessPointId',
        'aclIds' => 'AclIds',
        'applicationBandwidthPackageBussinessStatus' => 'ApplicationBandwidthPackageBussinessStatus',
        'applicationBandwidthPackageId' => 'ApplicationBandwidthPackageId',
        'applicationBandwidthPackageName' => 'ApplicationBandwidthPackageName',
        'applicationBandwidthPackageOperationLocks' => 'ApplicationBandwidthPackageOperationLocks',
        'associatedCcnId' => 'AssociatedCcnId',
        'associatedCcnName' => 'AssociatedCcnName',
        'backupBoxControllerIp' => 'BackupBoxControllerIp',
        'boxControllerIp' => 'BoxControllerIp',
        'cidrBlock' => 'CidrBlock',
        'city' => 'City',
        'createTime' => 'CreateTime',
        'dataPlan' => 'DataPlan',
        'description' => 'Description',
        'devices' => 'Devices',
        'enableOptimization' => 'EnableOptimization',
        'enableSoftwareConnectionAudit' => 'EnableSoftwareConnectionAudit',
        'endTime' => 'EndTime',
        'flowLogIds' => 'FlowLogIds',
        'IRIds' => 'IRIds',
        'instanceType' => 'InstanceType',
        'ipsecStatus' => 'IpsecStatus',
        'links' => 'Links',
        'maxBandwidth' => 'MaxBandwidth',
        'name' => 'Name',
        'optimizationType' => 'OptimizationType',
        'position' => 'Position',
        'qosIds' => 'QosIds',
        'requestId' => 'RequestId',
        'resellerInstanceId' => 'ResellerInstanceId',
        'resellerUid' => 'ResellerUid',
        'resourceGroupId' => 'ResourceGroupId',
        'routingStrategy' => 'RoutingStrategy',
        'securityLockThreshold' => 'SecurityLockThreshold',
        'serialNumber' => 'SerialNumber',
        'smartAGId' => 'SmartAGId',
        'status' => 'Status',
        'trafficMasterSn' => 'TrafficMasterSn',
        'upBandwidth4G' => 'UpBandwidth4G',
        'upBandwidthWan' => 'UpBandwidthWan',
        'userCount' => 'UserCount',
        'vpnStatus' => 'VpnStatus',
    ];

    public function validate()
    {
        if (null !== $this->aclIds) {
            $this->aclIds->validate();
        }
        if (null !== $this->applicationBandwidthPackageOperationLocks) {
            $this->applicationBandwidthPackageOperationLocks->validate();
        }
        if (null !== $this->devices) {
            $this->devices->validate();
        }
        if (null !== $this->flowLogIds) {
            $this->flowLogIds->validate();
        }
        if (null !== $this->IRIds) {
            $this->IRIds->validate();
        }
        if (null !== $this->links) {
            $this->links->validate();
        }
        if (null !== $this->qosIds) {
            $this->qosIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerateBandwidth) {
            $res['AccelerateBandwidth'] = $this->accelerateBandwidth;
        }

        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }

        if (null !== $this->aclIds) {
            $res['AclIds'] = null !== $this->aclIds ? $this->aclIds->toArray($noStream) : $this->aclIds;
        }

        if (null !== $this->applicationBandwidthPackageBussinessStatus) {
            $res['ApplicationBandwidthPackageBussinessStatus'] = $this->applicationBandwidthPackageBussinessStatus;
        }

        if (null !== $this->applicationBandwidthPackageId) {
            $res['ApplicationBandwidthPackageId'] = $this->applicationBandwidthPackageId;
        }

        if (null !== $this->applicationBandwidthPackageName) {
            $res['ApplicationBandwidthPackageName'] = $this->applicationBandwidthPackageName;
        }

        if (null !== $this->applicationBandwidthPackageOperationLocks) {
            $res['ApplicationBandwidthPackageOperationLocks'] = null !== $this->applicationBandwidthPackageOperationLocks ? $this->applicationBandwidthPackageOperationLocks->toArray($noStream) : $this->applicationBandwidthPackageOperationLocks;
        }

        if (null !== $this->associatedCcnId) {
            $res['AssociatedCcnId'] = $this->associatedCcnId;
        }

        if (null !== $this->associatedCcnName) {
            $res['AssociatedCcnName'] = $this->associatedCcnName;
        }

        if (null !== $this->backupBoxControllerIp) {
            $res['BackupBoxControllerIp'] = $this->backupBoxControllerIp;
        }

        if (null !== $this->boxControllerIp) {
            $res['BoxControllerIp'] = $this->boxControllerIp;
        }

        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataPlan) {
            $res['DataPlan'] = $this->dataPlan;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->devices) {
            $res['Devices'] = null !== $this->devices ? $this->devices->toArray($noStream) : $this->devices;
        }

        if (null !== $this->enableOptimization) {
            $res['EnableOptimization'] = $this->enableOptimization;
        }

        if (null !== $this->enableSoftwareConnectionAudit) {
            $res['EnableSoftwareConnectionAudit'] = $this->enableSoftwareConnectionAudit;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->flowLogIds) {
            $res['FlowLogIds'] = null !== $this->flowLogIds ? $this->flowLogIds->toArray($noStream) : $this->flowLogIds;
        }

        if (null !== $this->IRIds) {
            $res['IRIds'] = null !== $this->IRIds ? $this->IRIds->toArray($noStream) : $this->IRIds;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->ipsecStatus) {
            $res['IpsecStatus'] = $this->ipsecStatus;
        }

        if (null !== $this->links) {
            $res['Links'] = null !== $this->links ? $this->links->toArray($noStream) : $this->links;
        }

        if (null !== $this->maxBandwidth) {
            $res['MaxBandwidth'] = $this->maxBandwidth;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->optimizationType) {
            $res['OptimizationType'] = $this->optimizationType;
        }

        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        if (null !== $this->qosIds) {
            $res['QosIds'] = null !== $this->qosIds ? $this->qosIds->toArray($noStream) : $this->qosIds;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resellerInstanceId) {
            $res['ResellerInstanceId'] = $this->resellerInstanceId;
        }

        if (null !== $this->resellerUid) {
            $res['ResellerUid'] = $this->resellerUid;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->routingStrategy) {
            $res['RoutingStrategy'] = $this->routingStrategy;
        }

        if (null !== $this->securityLockThreshold) {
            $res['SecurityLockThreshold'] = $this->securityLockThreshold;
        }

        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }

        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->trafficMasterSn) {
            $res['TrafficMasterSn'] = $this->trafficMasterSn;
        }

        if (null !== $this->upBandwidth4G) {
            $res['UpBandwidth4G'] = $this->upBandwidth4G;
        }

        if (null !== $this->upBandwidthWan) {
            $res['UpBandwidthWan'] = $this->upBandwidthWan;
        }

        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }

        if (null !== $this->vpnStatus) {
            $res['VpnStatus'] = $this->vpnStatus;
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
        if (isset($map['AccelerateBandwidth'])) {
            $model->accelerateBandwidth = $map['AccelerateBandwidth'];
        }

        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }

        if (isset($map['AclIds'])) {
            $model->aclIds = aclIds::fromMap($map['AclIds']);
        }

        if (isset($map['ApplicationBandwidthPackageBussinessStatus'])) {
            $model->applicationBandwidthPackageBussinessStatus = $map['ApplicationBandwidthPackageBussinessStatus'];
        }

        if (isset($map['ApplicationBandwidthPackageId'])) {
            $model->applicationBandwidthPackageId = $map['ApplicationBandwidthPackageId'];
        }

        if (isset($map['ApplicationBandwidthPackageName'])) {
            $model->applicationBandwidthPackageName = $map['ApplicationBandwidthPackageName'];
        }

        if (isset($map['ApplicationBandwidthPackageOperationLocks'])) {
            $model->applicationBandwidthPackageOperationLocks = applicationBandwidthPackageOperationLocks::fromMap($map['ApplicationBandwidthPackageOperationLocks']);
        }

        if (isset($map['AssociatedCcnId'])) {
            $model->associatedCcnId = $map['AssociatedCcnId'];
        }

        if (isset($map['AssociatedCcnName'])) {
            $model->associatedCcnName = $map['AssociatedCcnName'];
        }

        if (isset($map['BackupBoxControllerIp'])) {
            $model->backupBoxControllerIp = $map['BackupBoxControllerIp'];
        }

        if (isset($map['BoxControllerIp'])) {
            $model->boxControllerIp = $map['BoxControllerIp'];
        }

        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataPlan'])) {
            $model->dataPlan = $map['DataPlan'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Devices'])) {
            $model->devices = devices::fromMap($map['Devices']);
        }

        if (isset($map['EnableOptimization'])) {
            $model->enableOptimization = $map['EnableOptimization'];
        }

        if (isset($map['EnableSoftwareConnectionAudit'])) {
            $model->enableSoftwareConnectionAudit = $map['EnableSoftwareConnectionAudit'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FlowLogIds'])) {
            $model->flowLogIds = flowLogIds::fromMap($map['FlowLogIds']);
        }

        if (isset($map['IRIds'])) {
            $model->IRIds = IRIds::fromMap($map['IRIds']);
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['IpsecStatus'])) {
            $model->ipsecStatus = $map['IpsecStatus'];
        }

        if (isset($map['Links'])) {
            $model->links = links::fromMap($map['Links']);
        }

        if (isset($map['MaxBandwidth'])) {
            $model->maxBandwidth = $map['MaxBandwidth'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OptimizationType'])) {
            $model->optimizationType = $map['OptimizationType'];
        }

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        if (isset($map['QosIds'])) {
            $model->qosIds = qosIds::fromMap($map['QosIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResellerInstanceId'])) {
            $model->resellerInstanceId = $map['ResellerInstanceId'];
        }

        if (isset($map['ResellerUid'])) {
            $model->resellerUid = $map['ResellerUid'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RoutingStrategy'])) {
            $model->routingStrategy = $map['RoutingStrategy'];
        }

        if (isset($map['SecurityLockThreshold'])) {
            $model->securityLockThreshold = $map['SecurityLockThreshold'];
        }

        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }

        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TrafficMasterSn'])) {
            $model->trafficMasterSn = $map['TrafficMasterSn'];
        }

        if (isset($map['UpBandwidth4G'])) {
            $model->upBandwidth4G = $map['UpBandwidth4G'];
        }

        if (isset($map['UpBandwidthWan'])) {
            $model->upBandwidthWan = $map['UpBandwidthWan'];
        }

        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }

        if (isset($map['VpnStatus'])) {
            $model->vpnStatus = $map['VpnStatus'];
        }

        return $model;
    }
}
