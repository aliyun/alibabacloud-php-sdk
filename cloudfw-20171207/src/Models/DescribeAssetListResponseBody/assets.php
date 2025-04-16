<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAssetListResponseBody;

use AlibabaCloud\Dara\Model;

class assets extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $bindInstanceId;

    /**
     * @var string
     */
    public $bindInstanceName;

    /**
     * @var string
     */
    public $createTimeStamp;

    /**
     * @var string
     */
    public $internetAddress;

    /**
     * @var string
     */
    public $intranetAddress;

    /**
     * @var int
     */
    public $ipVersion;

    /**
     * @var int
     */
    public $last7DayOutTrafficBytes;

    /**
     * @var int
     */
    public $memberUid;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $newResourceTag;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $protectStatus;

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
    public $resourceInstanceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $sensitiveDataStatus;

    /**
     * @var string
     */
    public $sgStatus;

    /**
     * @var int
     */
    public $sgStatusTime;

    /**
     * @var string
     */
    public $syncStatus;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aliUid' => 'AliUid',
        'bindInstanceId' => 'BindInstanceId',
        'bindInstanceName' => 'BindInstanceName',
        'createTimeStamp' => 'CreateTimeStamp',
        'internetAddress' => 'InternetAddress',
        'intranetAddress' => 'IntranetAddress',
        'ipVersion' => 'IpVersion',
        'last7DayOutTrafficBytes' => 'Last7DayOutTrafficBytes',
        'memberUid' => 'MemberUid',
        'name' => 'Name',
        'newResourceTag' => 'NewResourceTag',
        'note' => 'Note',
        'protectStatus' => 'ProtectStatus',
        'regionID' => 'RegionID',
        'regionStatus' => 'RegionStatus',
        'resourceInstanceId' => 'ResourceInstanceId',
        'resourceType' => 'ResourceType',
        'riskLevel' => 'RiskLevel',
        'sensitiveDataStatus' => 'SensitiveDataStatus',
        'sgStatus' => 'SgStatus',
        'sgStatusTime' => 'SgStatusTime',
        'syncStatus' => 'SyncStatus',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->createTimeStamp) {
            $res['CreateTimeStamp'] = $this->createTimeStamp;
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

        if (null !== $this->last7DayOutTrafficBytes) {
            $res['Last7DayOutTrafficBytes'] = $this->last7DayOutTrafficBytes;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->newResourceTag) {
            $res['NewResourceTag'] = $this->newResourceTag;
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

        if (null !== $this->sensitiveDataStatus) {
            $res['SensitiveDataStatus'] = $this->sensitiveDataStatus;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['CreateTimeStamp'])) {
            $model->createTimeStamp = $map['CreateTimeStamp'];
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

        if (isset($map['Last7DayOutTrafficBytes'])) {
            $model->last7DayOutTrafficBytes = $map['Last7DayOutTrafficBytes'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NewResourceTag'])) {
            $model->newResourceTag = $map['NewResourceTag'];
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

        if (isset($map['SensitiveDataStatus'])) {
            $model->sensitiveDataStatus = $map['SensitiveDataStatus'];
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
