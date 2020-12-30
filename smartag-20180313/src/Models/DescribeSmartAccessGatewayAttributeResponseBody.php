<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody\aclIds;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody\devices;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody\flowLogIds;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody\links;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody\qosIds;
use AlibabaCloud\Tea\Model;

class DescribeSmartAccessGatewayAttributeResponseBody extends Model
{
    /**
     * @var int
     */
    public $upBandwidth4G;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @var string
     */
    public $associatedCcnName;

    /**
     * @var string
     */
    public $maxBandwidth;

    /**
     * @var string
     */
    public $vpnStatus;

    /**
     * @var string
     */
    public $boxControllerIp;

    /**
     * @var int
     */
    public $upBandwidthWan;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var qosIds
     */
    public $qosIds;

    /**
     * @var devices
     */
    public $devices;

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
    public $ipsecStatus;

    /**
     * @var string
     */
    public $routingStrategy;

    /**
     * @var string
     */
    public $associatedCcnId;

    /**
     * @var flowLogIds
     */
    public $flowLogIds;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $securityLockThreshold;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $dataPlan;

    /**
     * @var bool
     */
    public $enableOptimization;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $backupBoxControllerIp;

    /**
     * @var string
     */
    public $trafficMasterSn;

    /**
     * @var string
     */
    public $accessPointId;

    /**
     * @var links
     */
    public $links;

    /**
     * @var aclIds
     */
    public $aclIds;
    protected $_name = [
        'upBandwidth4G'         => 'UpBandwidth4G',
        'description'           => 'Description',
        'endTime'               => 'EndTime',
        'resourceGroupId'       => 'ResourceGroupId',
        'userCount'             => 'UserCount',
        'associatedCcnName'     => 'AssociatedCcnName',
        'maxBandwidth'          => 'MaxBandwidth',
        'vpnStatus'             => 'VpnStatus',
        'boxControllerIp'       => 'BoxControllerIp',
        'upBandwidthWan'        => 'UpBandwidthWan',
        'cidrBlock'             => 'CidrBlock',
        'qosIds'                => 'QosIds',
        'devices'               => 'Devices',
        'name'                  => 'Name',
        'optimizationType'      => 'OptimizationType',
        'ipsecStatus'           => 'IpsecStatus',
        'routingStrategy'       => 'RoutingStrategy',
        'associatedCcnId'       => 'AssociatedCcnId',
        'flowLogIds'            => 'FlowLogIds',
        'smartAGId'             => 'SmartAGId',
        'instanceType'          => 'InstanceType',
        'securityLockThreshold' => 'SecurityLockThreshold',
        'status'                => 'Status',
        'requestId'             => 'RequestId',
        'createTime'            => 'CreateTime',
        'dataPlan'              => 'DataPlan',
        'enableOptimization'    => 'EnableOptimization',
        'city'                  => 'City',
        'serialNumber'          => 'SerialNumber',
        'backupBoxControllerIp' => 'BackupBoxControllerIp',
        'trafficMasterSn'       => 'TrafficMasterSn',
        'accessPointId'         => 'AccessPointId',
        'links'                 => 'Links',
        'aclIds'                => 'AclIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->upBandwidth4G) {
            $res['UpBandwidth4G'] = $this->upBandwidth4G;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }
        if (null !== $this->associatedCcnName) {
            $res['AssociatedCcnName'] = $this->associatedCcnName;
        }
        if (null !== $this->maxBandwidth) {
            $res['MaxBandwidth'] = $this->maxBandwidth;
        }
        if (null !== $this->vpnStatus) {
            $res['VpnStatus'] = $this->vpnStatus;
        }
        if (null !== $this->boxControllerIp) {
            $res['BoxControllerIp'] = $this->boxControllerIp;
        }
        if (null !== $this->upBandwidthWan) {
            $res['UpBandwidthWan'] = $this->upBandwidthWan;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->qosIds) {
            $res['QosIds'] = null !== $this->qosIds ? $this->qosIds->toMap() : null;
        }
        if (null !== $this->devices) {
            $res['Devices'] = null !== $this->devices ? $this->devices->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->optimizationType) {
            $res['OptimizationType'] = $this->optimizationType;
        }
        if (null !== $this->ipsecStatus) {
            $res['IpsecStatus'] = $this->ipsecStatus;
        }
        if (null !== $this->routingStrategy) {
            $res['RoutingStrategy'] = $this->routingStrategy;
        }
        if (null !== $this->associatedCcnId) {
            $res['AssociatedCcnId'] = $this->associatedCcnId;
        }
        if (null !== $this->flowLogIds) {
            $res['FlowLogIds'] = null !== $this->flowLogIds ? $this->flowLogIds->toMap() : null;
        }
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->securityLockThreshold) {
            $res['SecurityLockThreshold'] = $this->securityLockThreshold;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataPlan) {
            $res['DataPlan'] = $this->dataPlan;
        }
        if (null !== $this->enableOptimization) {
            $res['EnableOptimization'] = $this->enableOptimization;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->backupBoxControllerIp) {
            $res['BackupBoxControllerIp'] = $this->backupBoxControllerIp;
        }
        if (null !== $this->trafficMasterSn) {
            $res['TrafficMasterSn'] = $this->trafficMasterSn;
        }
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->links) {
            $res['Links'] = null !== $this->links ? $this->links->toMap() : null;
        }
        if (null !== $this->aclIds) {
            $res['AclIds'] = null !== $this->aclIds ? $this->aclIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSmartAccessGatewayAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpBandwidth4G'])) {
            $model->upBandwidth4G = $map['UpBandwidth4G'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }
        if (isset($map['AssociatedCcnName'])) {
            $model->associatedCcnName = $map['AssociatedCcnName'];
        }
        if (isset($map['MaxBandwidth'])) {
            $model->maxBandwidth = $map['MaxBandwidth'];
        }
        if (isset($map['VpnStatus'])) {
            $model->vpnStatus = $map['VpnStatus'];
        }
        if (isset($map['BoxControllerIp'])) {
            $model->boxControllerIp = $map['BoxControllerIp'];
        }
        if (isset($map['UpBandwidthWan'])) {
            $model->upBandwidthWan = $map['UpBandwidthWan'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['QosIds'])) {
            $model->qosIds = qosIds::fromMap($map['QosIds']);
        }
        if (isset($map['Devices'])) {
            $model->devices = devices::fromMap($map['Devices']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OptimizationType'])) {
            $model->optimizationType = $map['OptimizationType'];
        }
        if (isset($map['IpsecStatus'])) {
            $model->ipsecStatus = $map['IpsecStatus'];
        }
        if (isset($map['RoutingStrategy'])) {
            $model->routingStrategy = $map['RoutingStrategy'];
        }
        if (isset($map['AssociatedCcnId'])) {
            $model->associatedCcnId = $map['AssociatedCcnId'];
        }
        if (isset($map['FlowLogIds'])) {
            $model->flowLogIds = flowLogIds::fromMap($map['FlowLogIds']);
        }
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SecurityLockThreshold'])) {
            $model->securityLockThreshold = $map['SecurityLockThreshold'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataPlan'])) {
            $model->dataPlan = $map['DataPlan'];
        }
        if (isset($map['EnableOptimization'])) {
            $model->enableOptimization = $map['EnableOptimization'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['BackupBoxControllerIp'])) {
            $model->backupBoxControllerIp = $map['BackupBoxControllerIp'];
        }
        if (isset($map['TrafficMasterSn'])) {
            $model->trafficMasterSn = $map['TrafficMasterSn'];
        }
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['Links'])) {
            $model->links = links::fromMap($map['Links']);
        }
        if (isset($map['AclIds'])) {
            $model->aclIds = aclIds::fromMap($map['AclIds']);
        }

        return $model;
    }
}
