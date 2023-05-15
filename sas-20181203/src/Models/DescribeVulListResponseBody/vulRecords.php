<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords\extendContentJson;
use AlibabaCloud\Tea\Model;

class vulRecords extends Model
{
    /**
     * @description The status of the vulnerability. Valid values:
     *
     *   **1**: unfixed
     *   **2**: fix failed
     *   3: rollback failed
     *   **4**: fixing
     *   **5**: being rolled back
     *   **6**: being verified
     *   **7**: fixed
     *   **8**: fixed and to be restarted
     *   **9**: rolled back
     *   **10**: ignored
     *   **11**: rolled back and to be restarted
     *   **12**: not found
     *   **20**: expired
     *
     * @example RHSA-2019:0230-Important: polkit security update
     *
     * @var string
     */
    public $aliasName;

    /**
     * @example 3
     *
     * @var string
     */
    public $authVersion;

    /**
     * @description CentOS 7.2 64-bit
     *
     * @example true
     *
     * @var bool
     */
    public $bind;

    /**
     * @description The public IP address of the asset that is associated with the vulnerability.
     *
     * @var extendContentJson
     */
    public $extendContentJson;

    /**
     * @description The priority to fix the vulnerability. Valid values:
     *
     *   **asap**: high
     *   **later**: medium
     *   **nntf**: low
     *
     * > We recommend that you fix the vulnerabilities that have the **high** priority at the earliest opportunity.
     * @example 1554189334000
     *
     * @var int
     */
    public $firstTs;

    /**
     * @description The name of the vulnerability.
     *
     * @example 281801
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The private IP address of the asset.
     *
     * @example i-bp18t***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the operating system for your asset.
     *
     * @example testInstance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The tag that is added to the vulnerability.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The timestamp when the vulnerability was first detected. Unit: milliseconds.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The ID of the region in which the server resides.
     *
     * @example 1620404763000
     *
     * @var int
     */
    public $lastTs;

    /**
     * @description The ID of the vulnerability.
     *
     * @example 1620404763000
     *
     * @var int
     */
    public $modifyTs;

    /**
     * @description The instance ID of the asset.
     *
     * @example oval:com.redhat.rhsa:def:20170574
     *
     * @var string
     */
    public $name;

    /**
     * @description The UUID of the asset.
     *
     * @example asap
     *
     * @var string
     */
    public $necessity;

    /**
     * @description The name of the vulnerability.
     *
     * @example true
     *
     * @var bool
     */
    public $online;

    /**
     * @description The edition of Security Center that is authorized to protect the asset. Valid values:
     *
     *   **1**: Basic edition
     *   **6**: Anti-virus edition
     *   **5**: Advanced edition
     *   **3**: Enterprise edition
     *   **7**: Ultimate edition
     *   **10**: Value-added Plan edition
     *
     * @var string
     */
    public $osName;

    /**
     * @description The code that indicates the vulnerability fixing result.
     *
     * @example linux
     *
     * @var string
     */
    public $osVersion;

    /**
     * @description The name of the asset.
     *
     * @example 101162078
     *
     * @var int
     */
    public $primaryId;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **emg**: urgent vulnerability
     *   **app**: application vulnerability
     *   **sca**: application vulnerability that is detected by using software component analysis
     *
     * @example 1
     *
     * @var int
     */
    public $raspDefend;

    /**
     * @description The timestamp when the vulnerability status was modified. Unit: milliseconds.
     *
     * @example 1
     *
     * @var int
     */
    public $raspStatus;

    /**
     * @description The timestamp when the vulnerability was fixed. Unit: milliseconds.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The timestamp when the vulnerability was last detected. Unit: milliseconds.
     *
     * @example CVE-2017-7518,CVE-2017-12188
     *
     * @var string
     */
    public $related;

    /**
     * @description The ID of the asset group.
     *
     * @example 1541207563000
     *
     * @var int
     */
    public $repairTs;

    /**
     * @description The Common Vulnerabilities and Exposures (CVE) IDs related to the vulnerability. Multiple CVE IDs are separated by commas (,).
     *
     * @example 0
     *
     * @var string
     */
    public $resultCode;

    /**
     * @description The extended information about the vulnerability.
     *
     * @example timeout
     *
     * @var string
     */
    public $resultMessage;

    /**
     * @description The status of the vulnerability. Valid values:
     *
     *   **1**: unfixed
     *   **2**: fix failed
     *   **3**: rollback failed
     *   **4**: fixing
     *   **5**: being rolled back
     *   **6**: being verified
     *   **7**: fixed
     *   **8**: fixed and to be restarted
     *   **9**: rolled back
     *   **10**: ignored
     *   **11**: rolled back and to be restarted
     *   **12**: not found
     *   **20**: expired
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description Indicates whether the Security Center agent on the asset is online. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example oval
     *
     * @var string
     */
    public $tag;

    /**
     * @description The public IP address of the asset.
     *
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @description The message that indicates the vulnerability fixing result.
     *
     * @example 04c56617-23fc-43a5-ab9b-****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliasName'         => 'AliasName',
        'authVersion'       => 'AuthVersion',
        'bind'              => 'Bind',
        'extendContentJson' => 'ExtendContentJson',
        'firstTs'           => 'FirstTs',
        'groupId'           => 'GroupId',
        'instanceId'        => 'InstanceId',
        'instanceName'      => 'InstanceName',
        'internetIp'        => 'InternetIp',
        'intranetIp'        => 'IntranetIp',
        'lastTs'            => 'LastTs',
        'modifyTs'          => 'ModifyTs',
        'name'              => 'Name',
        'necessity'         => 'Necessity',
        'online'            => 'Online',
        'osName'            => 'OsName',
        'osVersion'         => 'OsVersion',
        'primaryId'         => 'PrimaryId',
        'raspDefend'        => 'RaspDefend',
        'raspStatus'        => 'RaspStatus',
        'regionId'          => 'RegionId',
        'related'           => 'Related',
        'repairTs'          => 'RepairTs',
        'resultCode'        => 'ResultCode',
        'resultMessage'     => 'ResultMessage',
        'status'            => 'Status',
        'tag'               => 'Tag',
        'type'              => 'Type',
        'uuid'              => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->authVersion) {
            $res['AuthVersion'] = $this->authVersion;
        }
        if (null !== $this->bind) {
            $res['Bind'] = $this->bind;
        }
        if (null !== $this->extendContentJson) {
            $res['ExtendContentJson'] = null !== $this->extendContentJson ? $this->extendContentJson->toMap() : null;
        }
        if (null !== $this->firstTs) {
            $res['FirstTs'] = $this->firstTs;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->lastTs) {
            $res['LastTs'] = $this->lastTs;
        }
        if (null !== $this->modifyTs) {
            $res['ModifyTs'] = $this->modifyTs;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->osName) {
            $res['OsName'] = $this->osName;
        }
        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
        }
        if (null !== $this->primaryId) {
            $res['PrimaryId'] = $this->primaryId;
        }
        if (null !== $this->raspDefend) {
            $res['RaspDefend'] = $this->raspDefend;
        }
        if (null !== $this->raspStatus) {
            $res['RaspStatus'] = $this->raspStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->related) {
            $res['Related'] = $this->related;
        }
        if (null !== $this->repairTs) {
            $res['RepairTs'] = $this->repairTs;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->resultMessage) {
            $res['ResultMessage'] = $this->resultMessage;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vulRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['AuthVersion'])) {
            $model->authVersion = $map['AuthVersion'];
        }
        if (isset($map['Bind'])) {
            $model->bind = $map['Bind'];
        }
        if (isset($map['ExtendContentJson'])) {
            $model->extendContentJson = extendContentJson::fromMap($map['ExtendContentJson']);
        }
        if (isset($map['FirstTs'])) {
            $model->firstTs = $map['FirstTs'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['LastTs'])) {
            $model->lastTs = $map['LastTs'];
        }
        if (isset($map['ModifyTs'])) {
            $model->modifyTs = $map['ModifyTs'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['OsName'])) {
            $model->osName = $map['OsName'];
        }
        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }
        if (isset($map['PrimaryId'])) {
            $model->primaryId = $map['PrimaryId'];
        }
        if (isset($map['RaspDefend'])) {
            $model->raspDefend = $map['RaspDefend'];
        }
        if (isset($map['RaspStatus'])) {
            $model->raspStatus = $map['RaspStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Related'])) {
            $model->related = $map['Related'];
        }
        if (isset($map['RepairTs'])) {
            $model->repairTs = $map['RepairTs'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['ResultMessage'])) {
            $model->resultMessage = $map['ResultMessage'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
