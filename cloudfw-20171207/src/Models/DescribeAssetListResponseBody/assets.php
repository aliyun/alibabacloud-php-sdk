<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetListResponseBody;

use AlibabaCloud\Tea\Model;

class assets extends Model
{
    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $bindInstanceName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $sgStatusTime;

    /**
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @var int
     */
    public $memberUid;

    /**
     * @var string
     */
    public $intranetAddress;

    /**
     * @var string
     */
    public $syncStatus;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $protectStatus;

    /**
     * @var string
     */
    public $internetAddress;

    /**
     * @var string
     */
    public $bindInstanceId;

    /**
     * @var string
     */
    public $regionID;

    /**
     * @var string
     */
    public $regionStatus;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $sgStatus;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'riskLevel'          => 'RiskLevel',
        'bindInstanceName'   => 'BindInstanceName',
        'type'               => 'Type',
        'sgStatusTime'       => 'SgStatusTime',
        'resourceInstanceId' => 'ResourceInstanceId',
        'memberUid'          => 'MemberUid',
        'intranetAddress'    => 'IntranetAddress',
        'syncStatus'         => 'SyncStatus',
        'aliUid'             => 'AliUid',
        'protectStatus'      => 'ProtectStatus',
        'internetAddress'    => 'InternetAddress',
        'bindInstanceId'     => 'BindInstanceId',
        'regionID'           => 'RegionID',
        'regionStatus'       => 'RegionStatus',
        'resourceType'       => 'ResourceType',
        'ipVersion'          => 'IpVersion',
        'sgStatus'           => 'SgStatus',
        'note'               => 'Note',
        'name'               => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->bindInstanceName) {
            $res['BindInstanceName'] = $this->bindInstanceName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->sgStatusTime) {
            $res['SgStatusTime'] = $this->sgStatusTime;
        }
        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->intranetAddress) {
            $res['IntranetAddress'] = $this->intranetAddress;
        }
        if (null !== $this->syncStatus) {
            $res['SyncStatus'] = $this->syncStatus;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->protectStatus) {
            $res['ProtectStatus'] = $this->protectStatus;
        }
        if (null !== $this->internetAddress) {
            $res['InternetAddress'] = $this->internetAddress;
        }
        if (null !== $this->bindInstanceId) {
            $res['BindInstanceId'] = $this->bindInstanceId;
        }
        if (null !== $this->regionID) {
            $res['RegionID'] = $this->regionID;
        }
        if (null !== $this->regionStatus) {
            $res['RegionStatus'] = $this->regionStatus;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->sgStatus) {
            $res['SgStatus'] = $this->sgStatus;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['BindInstanceName'])) {
            $model->bindInstanceName = $map['BindInstanceName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['SgStatusTime'])) {
            $model->sgStatusTime = $map['SgStatusTime'];
        }
        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['IntranetAddress'])) {
            $model->intranetAddress = $map['IntranetAddress'];
        }
        if (isset($map['SyncStatus'])) {
            $model->syncStatus = $map['SyncStatus'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['ProtectStatus'])) {
            $model->protectStatus = $map['ProtectStatus'];
        }
        if (isset($map['InternetAddress'])) {
            $model->internetAddress = $map['InternetAddress'];
        }
        if (isset($map['BindInstanceId'])) {
            $model->bindInstanceId = $map['BindInstanceId'];
        }
        if (isset($map['RegionID'])) {
            $model->regionID = $map['RegionID'];
        }
        if (isset($map['RegionStatus'])) {
            $model->regionStatus = $map['RegionStatus'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['SgStatus'])) {
            $model->sgStatus = $map['SgStatus'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
