<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewaysResponseBody\smartAccessGateways;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewaysResponseBody\smartAccessGateways\smartAccessGateway\links;

class smartAccessGateway extends Model
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
     * @var string
     */
    public $aclIds;

    /**
     * @var string
     */
    public $applicationBandwidthPackageId;

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
    public $backupSoftwareVersion;

    /**
     * @var string
     */
    public $backupStatus;

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
     * @var string
     */
    public $dpiMonitorStatus;

    /**
     * @var string
     */
    public $dpiStatus;

    /**
     * @var bool
     */
    public $enableAdvancedMonitor;

    /**
     * @var bool
     */
    public $enableSoftwareConnectionAudit;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $enterpriseCode;

    /**
     * @var string
     */
    public $hardwareVersion;

    /**
     * @var string
     */
    public $IRIds;

    /**
     * @var string
     */
    public $idaasApplicationId;

    /**
     * @var string
     */
    public $idaasId;

    /**
     * @var string
     */
    public $ipsecStatus;

    /**
     * @var string
     */
    public $isp;

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
     * @var string
     */
    public $position;

    /**
     * @var string
     */
    public $qosIds;

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
     * @var int
     */
    public $smartAGUid;

    /**
     * @var string
     */
    public $softwareVersion;

    /**
     * @var string
     */
    public $status;

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
        'applicationBandwidthPackageId' => 'ApplicationBandwidthPackageId',
        'associatedCcnId' => 'AssociatedCcnId',
        'associatedCcnName' => 'AssociatedCcnName',
        'backupSoftwareVersion' => 'BackupSoftwareVersion',
        'backupStatus' => 'BackupStatus',
        'cidrBlock' => 'CidrBlock',
        'city' => 'City',
        'createTime' => 'CreateTime',
        'dataPlan' => 'DataPlan',
        'description' => 'Description',
        'dpiMonitorStatus' => 'DpiMonitorStatus',
        'dpiStatus' => 'DpiStatus',
        'enableAdvancedMonitor' => 'EnableAdvancedMonitor',
        'enableSoftwareConnectionAudit' => 'EnableSoftwareConnectionAudit',
        'endTime' => 'EndTime',
        'enterpriseCode' => 'EnterpriseCode',
        'hardwareVersion' => 'HardwareVersion',
        'IRIds' => 'IRIds',
        'idaasApplicationId' => 'IdaasApplicationId',
        'idaasId' => 'IdaasId',
        'ipsecStatus' => 'IpsecStatus',
        'isp' => 'Isp',
        'links' => 'Links',
        'maxBandwidth' => 'MaxBandwidth',
        'name' => 'Name',
        'position' => 'Position',
        'qosIds' => 'QosIds',
        'resellerInstanceId' => 'ResellerInstanceId',
        'resellerUid' => 'ResellerUid',
        'resourceGroupId' => 'ResourceGroupId',
        'routingStrategy' => 'RoutingStrategy',
        'securityLockThreshold' => 'SecurityLockThreshold',
        'serialNumber' => 'SerialNumber',
        'smartAGId' => 'SmartAGId',
        'smartAGUid' => 'SmartAGUid',
        'softwareVersion' => 'SoftwareVersion',
        'status' => 'Status',
        'upBandwidth4G' => 'UpBandwidth4G',
        'upBandwidthWan' => 'UpBandwidthWan',
        'userCount' => 'UserCount',
        'vpnStatus' => 'VpnStatus',
    ];

    public function validate()
    {
        if (null !== $this->links) {
            $this->links->validate();
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
            $res['AclIds'] = $this->aclIds;
        }

        if (null !== $this->applicationBandwidthPackageId) {
            $res['ApplicationBandwidthPackageId'] = $this->applicationBandwidthPackageId;
        }

        if (null !== $this->associatedCcnId) {
            $res['AssociatedCcnId'] = $this->associatedCcnId;
        }

        if (null !== $this->associatedCcnName) {
            $res['AssociatedCcnName'] = $this->associatedCcnName;
        }

        if (null !== $this->backupSoftwareVersion) {
            $res['BackupSoftwareVersion'] = $this->backupSoftwareVersion;
        }

        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
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

        if (null !== $this->dpiMonitorStatus) {
            $res['DpiMonitorStatus'] = $this->dpiMonitorStatus;
        }

        if (null !== $this->dpiStatus) {
            $res['DpiStatus'] = $this->dpiStatus;
        }

        if (null !== $this->enableAdvancedMonitor) {
            $res['EnableAdvancedMonitor'] = $this->enableAdvancedMonitor;
        }

        if (null !== $this->enableSoftwareConnectionAudit) {
            $res['EnableSoftwareConnectionAudit'] = $this->enableSoftwareConnectionAudit;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->enterpriseCode) {
            $res['EnterpriseCode'] = $this->enterpriseCode;
        }

        if (null !== $this->hardwareVersion) {
            $res['HardwareVersion'] = $this->hardwareVersion;
        }

        if (null !== $this->IRIds) {
            $res['IRIds'] = $this->IRIds;
        }

        if (null !== $this->idaasApplicationId) {
            $res['IdaasApplicationId'] = $this->idaasApplicationId;
        }

        if (null !== $this->idaasId) {
            $res['IdaasId'] = $this->idaasId;
        }

        if (null !== $this->ipsecStatus) {
            $res['IpsecStatus'] = $this->ipsecStatus;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
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

        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        if (null !== $this->qosIds) {
            $res['QosIds'] = $this->qosIds;
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

        if (null !== $this->smartAGUid) {
            $res['SmartAGUid'] = $this->smartAGUid;
        }

        if (null !== $this->softwareVersion) {
            $res['SoftwareVersion'] = $this->softwareVersion;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
            $model->aclIds = $map['AclIds'];
        }

        if (isset($map['ApplicationBandwidthPackageId'])) {
            $model->applicationBandwidthPackageId = $map['ApplicationBandwidthPackageId'];
        }

        if (isset($map['AssociatedCcnId'])) {
            $model->associatedCcnId = $map['AssociatedCcnId'];
        }

        if (isset($map['AssociatedCcnName'])) {
            $model->associatedCcnName = $map['AssociatedCcnName'];
        }

        if (isset($map['BackupSoftwareVersion'])) {
            $model->backupSoftwareVersion = $map['BackupSoftwareVersion'];
        }

        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
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

        if (isset($map['DpiMonitorStatus'])) {
            $model->dpiMonitorStatus = $map['DpiMonitorStatus'];
        }

        if (isset($map['DpiStatus'])) {
            $model->dpiStatus = $map['DpiStatus'];
        }

        if (isset($map['EnableAdvancedMonitor'])) {
            $model->enableAdvancedMonitor = $map['EnableAdvancedMonitor'];
        }

        if (isset($map['EnableSoftwareConnectionAudit'])) {
            $model->enableSoftwareConnectionAudit = $map['EnableSoftwareConnectionAudit'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EnterpriseCode'])) {
            $model->enterpriseCode = $map['EnterpriseCode'];
        }

        if (isset($map['HardwareVersion'])) {
            $model->hardwareVersion = $map['HardwareVersion'];
        }

        if (isset($map['IRIds'])) {
            $model->IRIds = $map['IRIds'];
        }

        if (isset($map['IdaasApplicationId'])) {
            $model->idaasApplicationId = $map['IdaasApplicationId'];
        }

        if (isset($map['IdaasId'])) {
            $model->idaasId = $map['IdaasId'];
        }

        if (isset($map['IpsecStatus'])) {
            $model->ipsecStatus = $map['IpsecStatus'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
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

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        if (isset($map['QosIds'])) {
            $model->qosIds = $map['QosIds'];
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

        if (isset($map['SmartAGUid'])) {
            $model->smartAGUid = $map['SmartAGUid'];
        }

        if (isset($map['SoftwareVersion'])) {
            $model->softwareVersion = $map['SoftwareVersion'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
