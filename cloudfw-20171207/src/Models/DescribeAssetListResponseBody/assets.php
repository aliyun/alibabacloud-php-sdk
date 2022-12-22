<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetListResponseBody;

use AlibabaCloud\Tea\Model;

class assets extends Model
{
    /**
     * @description The UID of the Alibaba Cloud account.
     *
     * >  The value of this parameter indicates the management account to which the member is added.
     * @example 158039427902****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The instance ID of the asset that is bound to Cloud Firewall.
     *
     * @example i-8vbdrjrxzt78****
     *
     * @var string
     */
    public $bindInstanceId;

    /**
     * @description The instance name of the asset that is bound to Cloud Firewall.
     *
     * @example instance01
     *
     * @var string
     */
    public $bindInstanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $internetAddress;

    /**
     * @description The internal IP address of the server.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $intranetAddress;

    /**
     * @description The IP version of the asset that is protected by Cloud Firewall.
     *
     * Valid values:
     *
     *   **4**: IPv4
     *   **6**: IPv6
     *
     * @example 4
     *
     * @var int
     */
    public $ipVersion;

    /**
     * @description The UID of the member that is added in Cloud Firewall.
     *
     * @example 258039427902****
     *
     * @var int
     */
    public $memberUid;

    /**
     * @description The instance name of the asset that is protected by Cloud Firewall.
     *
     * @example instance01
     *
     * @var string
     */
    public $name;

    /**
     * @description The remarks of the asset. Valid values:
     *
     *   **REGION\_NOT\_SUPPORT**: The region is not supported.
     *   **NETWORK\_NOT\_SUPPORT**: The network is not supported.
     *
     * @example REGION_NOT_SUPPORT
     *
     * @var string
     */
    public $note;

    /**
     * @description The status of the firewall. Valid values:
     *
     *   **open**: The firewall is enabled.
     *   **opening**: The firewall is being enabled.
     *   **closed**: The firewall is disabled.
     *   **closing**: The firewall is being disabled.
     *
     * @example open
     *
     * @var string
     */
    public $protectStatus;

    /**
     * @description The ID of the region in which the asset resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionID;

    /**
     * @description Indicates whether the firewall is supported in the region in which the asset resides. Valid values:
     *
     *   **enable**: supported
     *   **disable**: unsupported
     *
     * @example enable
     *
     * @var string
     */
    public $regionStatus;

    /**
     * @description The instance ID of the asset.
     *
     * @example i-8vbdrjrxzt78****
     *
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @description The type of the asset. Valid values:
     *
     *   **BastionHostEgressIP**: the egress IP address of a bastion host
     *   **BastionHostIngressIP**: the ingress IP address of a bastion host
     *   **EcsEIP**: the EIP of an ECS instance
     *   **EcsPublicIP**: the public IP address of an ECS instance
     *   **EIP**: the EIP
     *   **EniEIP**: the EIP of an ENI
     *   **NatEIP**: the EIP of a NAT gateway
     *   **SlbEIP**: the EIP of an SLB instance
     *   **SlbPublicIP**: the public IP address of an SLB instance
     *   **NatPublicIP**: the public IP address of a NAT gateway
     *   **HAVIP**: the HAVIP
     *
     * @example EIP
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The risk level of the asset. Valid values:
     *
     *   **low**: low
     *   **middle**: medium
     *   **hight**: high
     *
     * >  The value of this parameter is returned only when the UserType parameter is set to free.
     * @example low
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The status of the security group policy. Valid values:
     *
     *   **pass**: delivered
     *   **block**: undelivered
     *   **unsupport**: unsupported
     *
     * @example block
     *
     * @var string
     */
    public $sgStatus;

    /**
     * @description The time when the status of the security group was last checked. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1615082937
     *
     * @var int
     */
    public $sgStatusTime;

    /**
     * @description The status of traffic redirection for the asset. Valid values:
     *
     *   **enable**: Traffic redirection is enabled.
     *   **disable**: Traffic redirection is disabled.
     *
     * @example enable
     *
     * @var string
     */
    public $syncStatus;

    /**
     * @description This parameter is deprecated.
     *
     * @example eip
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aliUid'             => 'AliUid',
        'bindInstanceId'     => 'BindInstanceId',
        'bindInstanceName'   => 'BindInstanceName',
        'internetAddress'    => 'InternetAddress',
        'intranetAddress'    => 'IntranetAddress',
        'ipVersion'          => 'IpVersion',
        'memberUid'          => 'MemberUid',
        'name'               => 'Name',
        'note'               => 'Note',
        'protectStatus'      => 'ProtectStatus',
        'regionID'           => 'RegionID',
        'regionStatus'       => 'RegionStatus',
        'resourceInstanceId' => 'ResourceInstanceId',
        'resourceType'       => 'ResourceType',
        'riskLevel'          => 'RiskLevel',
        'sgStatus'           => 'SgStatus',
        'sgStatusTime'       => 'SgStatusTime',
        'syncStatus'         => 'SyncStatus',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->bindInstanceId) {
            $res['BindInstanceId'] = $this->bindInstanceId;
        }
        if (null !== $this->bindInstanceName) {
            $res['BindInstanceName'] = $this->bindInstanceName;
        }
        if (null !== $this->internetAddress) {
            $res['InternetAddress'] = $this->internetAddress;
        }
        if (null !== $this->intranetAddress) {
            $res['IntranetAddress'] = $this->intranetAddress;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->protectStatus) {
            $res['ProtectStatus'] = $this->protectStatus;
        }
        if (null !== $this->regionID) {
            $res['RegionID'] = $this->regionID;
        }
        if (null !== $this->regionStatus) {
            $res['RegionStatus'] = $this->regionStatus;
        }
        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->sgStatus) {
            $res['SgStatus'] = $this->sgStatus;
        }
        if (null !== $this->sgStatusTime) {
            $res['SgStatusTime'] = $this->sgStatusTime;
        }
        if (null !== $this->syncStatus) {
            $res['SyncStatus'] = $this->syncStatus;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['BindInstanceId'])) {
            $model->bindInstanceId = $map['BindInstanceId'];
        }
        if (isset($map['BindInstanceName'])) {
            $model->bindInstanceName = $map['BindInstanceName'];
        }
        if (isset($map['InternetAddress'])) {
            $model->internetAddress = $map['InternetAddress'];
        }
        if (isset($map['IntranetAddress'])) {
            $model->intranetAddress = $map['IntranetAddress'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['ProtectStatus'])) {
            $model->protectStatus = $map['ProtectStatus'];
        }
        if (isset($map['RegionID'])) {
            $model->regionID = $map['RegionID'];
        }
        if (isset($map['RegionStatus'])) {
            $model->regionStatus = $map['RegionStatus'];
        }
        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['SgStatus'])) {
            $model->sgStatus = $map['SgStatus'];
        }
        if (isset($map['SgStatusTime'])) {
            $model->sgStatusTime = $map['SgStatusTime'];
        }
        if (isset($map['SyncStatus'])) {
            $model->syncStatus = $map['SyncStatus'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
