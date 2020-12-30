<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewaysResponseBody\smartAccessGateways;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewaysResponseBody\smartAccessGateways\smartAccessGateway\links;
use AlibabaCloud\Tea\Model;

class smartAccessGateway extends Model
{
    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $upBandwidth4G;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var string
     */
    public $idaasApplicationId;

    /**
     * @var string
     */
    public $softwareVersion;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var int
     */
    public $upBandwidthWan;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $aclIds;

    /**
     * @var string
     */
    public $qosIds;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ipsecStatus;

    /**
     * @var string
     */
    public $enterpriseCode;

    /**
     * @var string
     */
    public $dpiStatus;

    /**
     * @var string
     */
    public $associatedCcnId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $hardwareVersion;

    /**
     * @var string
     */
    public $idaasId;

    /**
     * @var int
     */
    public $dataPlan;

    /**
     * @var string
     */
    public $associatedCcnName;

    /**
     * @var string
     */
    public $dpiMonitorStatus;

    /**
     * @var string
     */
    public $maxBandwidth;

    /**
     * @var int
     */
    public $smartAGUid;

    /**
     * @var string
     */
    public $backupSoftwareVersion;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $vpnStatus;

    /**
     * @var string
     */
    public $routingStrategy;

    /**
     * @var int
     */
    public $securityLockThreshold;

    /**
     * @var links
     */
    public $links;

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
    public $accessPointId;
    protected $_name = [
        'serialNumber'          => 'SerialNumber',
        'status'                => 'Status',
        'upBandwidth4G'         => 'UpBandwidth4G',
        'backupStatus'          => 'BackupStatus',
        'idaasApplicationId'    => 'IdaasApplicationId',
        'softwareVersion'       => 'SoftwareVersion',
        'createTime'            => 'CreateTime',
        'smartAGId'             => 'SmartAGId',
        'upBandwidthWan'        => 'UpBandwidthWan',
        'city'                  => 'City',
        'aclIds'                => 'AclIds',
        'qosIds'                => 'QosIds',
        'cidrBlock'             => 'CidrBlock',
        'description'           => 'Description',
        'ipsecStatus'           => 'IpsecStatus',
        'enterpriseCode'        => 'EnterpriseCode',
        'dpiStatus'             => 'DpiStatus',
        'associatedCcnId'       => 'AssociatedCcnId',
        'name'                  => 'Name',
        'hardwareVersion'       => 'HardwareVersion',
        'idaasId'               => 'IdaasId',
        'dataPlan'              => 'DataPlan',
        'associatedCcnName'     => 'AssociatedCcnName',
        'dpiMonitorStatus'      => 'DpiMonitorStatus',
        'maxBandwidth'          => 'MaxBandwidth',
        'smartAGUid'            => 'SmartAGUid',
        'backupSoftwareVersion' => 'BackupSoftwareVersion',
        'endTime'               => 'EndTime',
        'vpnStatus'             => 'VpnStatus',
        'routingStrategy'       => 'RoutingStrategy',
        'securityLockThreshold' => 'SecurityLockThreshold',
        'links'                 => 'Links',
        'resourceGroupId'       => 'ResourceGroupId',
        'userCount'             => 'UserCount',
        'accessPointId'         => 'AccessPointId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->upBandwidth4G) {
            $res['UpBandwidth4G'] = $this->upBandwidth4G;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->idaasApplicationId) {
            $res['IdaasApplicationId'] = $this->idaasApplicationId;
        }
        if (null !== $this->softwareVersion) {
            $res['SoftwareVersion'] = $this->softwareVersion;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->upBandwidthWan) {
            $res['UpBandwidthWan'] = $this->upBandwidthWan;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->aclIds) {
            $res['AclIds'] = $this->aclIds;
        }
        if (null !== $this->qosIds) {
            $res['QosIds'] = $this->qosIds;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ipsecStatus) {
            $res['IpsecStatus'] = $this->ipsecStatus;
        }
        if (null !== $this->enterpriseCode) {
            $res['EnterpriseCode'] = $this->enterpriseCode;
        }
        if (null !== $this->dpiStatus) {
            $res['DpiStatus'] = $this->dpiStatus;
        }
        if (null !== $this->associatedCcnId) {
            $res['AssociatedCcnId'] = $this->associatedCcnId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->hardwareVersion) {
            $res['HardwareVersion'] = $this->hardwareVersion;
        }
        if (null !== $this->idaasId) {
            $res['IdaasId'] = $this->idaasId;
        }
        if (null !== $this->dataPlan) {
            $res['DataPlan'] = $this->dataPlan;
        }
        if (null !== $this->associatedCcnName) {
            $res['AssociatedCcnName'] = $this->associatedCcnName;
        }
        if (null !== $this->dpiMonitorStatus) {
            $res['DpiMonitorStatus'] = $this->dpiMonitorStatus;
        }
        if (null !== $this->maxBandwidth) {
            $res['MaxBandwidth'] = $this->maxBandwidth;
        }
        if (null !== $this->smartAGUid) {
            $res['SmartAGUid'] = $this->smartAGUid;
        }
        if (null !== $this->backupSoftwareVersion) {
            $res['BackupSoftwareVersion'] = $this->backupSoftwareVersion;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->vpnStatus) {
            $res['VpnStatus'] = $this->vpnStatus;
        }
        if (null !== $this->routingStrategy) {
            $res['RoutingStrategy'] = $this->routingStrategy;
        }
        if (null !== $this->securityLockThreshold) {
            $res['SecurityLockThreshold'] = $this->securityLockThreshold;
        }
        if (null !== $this->links) {
            $res['Links'] = null !== $this->links ? $this->links->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return smartAccessGateway
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpBandwidth4G'])) {
            $model->upBandwidth4G = $map['UpBandwidth4G'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['IdaasApplicationId'])) {
            $model->idaasApplicationId = $map['IdaasApplicationId'];
        }
        if (isset($map['SoftwareVersion'])) {
            $model->softwareVersion = $map['SoftwareVersion'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['UpBandwidthWan'])) {
            $model->upBandwidthWan = $map['UpBandwidthWan'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['AclIds'])) {
            $model->aclIds = $map['AclIds'];
        }
        if (isset($map['QosIds'])) {
            $model->qosIds = $map['QosIds'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IpsecStatus'])) {
            $model->ipsecStatus = $map['IpsecStatus'];
        }
        if (isset($map['EnterpriseCode'])) {
            $model->enterpriseCode = $map['EnterpriseCode'];
        }
        if (isset($map['DpiStatus'])) {
            $model->dpiStatus = $map['DpiStatus'];
        }
        if (isset($map['AssociatedCcnId'])) {
            $model->associatedCcnId = $map['AssociatedCcnId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['HardwareVersion'])) {
            $model->hardwareVersion = $map['HardwareVersion'];
        }
        if (isset($map['IdaasId'])) {
            $model->idaasId = $map['IdaasId'];
        }
        if (isset($map['DataPlan'])) {
            $model->dataPlan = $map['DataPlan'];
        }
        if (isset($map['AssociatedCcnName'])) {
            $model->associatedCcnName = $map['AssociatedCcnName'];
        }
        if (isset($map['DpiMonitorStatus'])) {
            $model->dpiMonitorStatus = $map['DpiMonitorStatus'];
        }
        if (isset($map['MaxBandwidth'])) {
            $model->maxBandwidth = $map['MaxBandwidth'];
        }
        if (isset($map['SmartAGUid'])) {
            $model->smartAGUid = $map['SmartAGUid'];
        }
        if (isset($map['BackupSoftwareVersion'])) {
            $model->backupSoftwareVersion = $map['BackupSoftwareVersion'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['VpnStatus'])) {
            $model->vpnStatus = $map['VpnStatus'];
        }
        if (isset($map['RoutingStrategy'])) {
            $model->routingStrategy = $map['RoutingStrategy'];
        }
        if (isset($map['SecurityLockThreshold'])) {
            $model->securityLockThreshold = $map['SecurityLockThreshold'];
        }
        if (isset($map['Links'])) {
            $model->links = links::fromMap($map['Links']);
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }

        return $model;
    }
}
