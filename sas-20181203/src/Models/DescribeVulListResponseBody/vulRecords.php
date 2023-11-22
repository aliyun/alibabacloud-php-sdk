<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords\extendContentJson;
use AlibabaCloud\Tea\Model;

class vulRecords extends Model
{
    /**
     * @description The name of the vulnerability.
     *
     * @example RHSA-2019:0230-Important: polkit security update
     *
     * @var string
     */
    public $aliasName;

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
     * @example 3
     *
     * @var string
     */
    public $authVersion;

    /**
     * @description Indicates whether Security Center is authorized to protect the asset. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $bind;

    /**
     * @description The extended information about the vulnerability.
     *
     * @var extendContentJson
     */
    public $extendContentJson;

    /**
     * @description The timestamp that was generated when the vulnerability was first detected. Unit: milliseconds.
     *
     * @example 1554189334000
     *
     * @var int
     */
    public $firstTs;

    /**
     * @description The ID of the asset group.
     *
     * @example 281801
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The instance ID of the asset.
     *
     * @example i-bp18t***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the asset.
     *
     * @example testInstance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the asset.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the asset.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @var string
     */
    public $k8sNamespace;

    /**
     * @var string
     */
    public $k8sNodeId;

    /**
     * @var string
     */
    public $k8sNodeName;

    /**
     * @var string
     */
    public $k8sPodName;

    /**
     * @description The timestamp that was generated when the vulnerability was last detected. Unit: milliseconds.
     *
     * @example 1620404763000
     *
     * @var int
     */
    public $lastTs;

    /**
     * @description The timestamp that was generated when the vulnerability status was modified. Unit: milliseconds.
     *
     * @example 1620404763000
     *
     * @var int
     */
    public $modifyTs;

    /**
     * @description The name of the vulnerability.
     *
     * @example oval:com.redhat.rhsa:def:20170574
     *
     * @var string
     */
    public $name;

    /**
     * @description The priority to fix the vulnerability. Valid values:
     *
     *   **asap**: high
     *   **later**: medium
     *   **nntf**: low
     *
     * >  We recommend that you fix **high-level** vulnerabilities as soon as possible.
     * @example asap
     *
     * @var string
     */
    public $necessity;

    /**
     * @description Indicates whether the Security Center agent of the asset is online. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $online;

    /**
     * @description The name of the operating system of your asset.
     *
     * @example CentOS 7.2 64-bit
     *
     * @var string
     */
    public $osName;

    /**
     * @description The name of the operating system of your asset.
     *
     * @example linux
     *
     * @var string
     */
    public $osVersion;

    /**
     * @description The vulnerability ID.
     *
     * @example 101162078
     *
     * @var int
     */
    public $primaryId;

    /**
     * @description Indicates whether the runtime application self-protection (RASP) feature is supported. Valid values:
     *
     *   **0**: TheRASP feature is not supported.
     *   **1**: The RASP feature is supported
     *
     * >  If this parameter is not returned, the RASP is not supported.
     * @example 1
     *
     * @var int
     */
    public $raspDefend;

    /**
     * @description The protection mode of the RASP feature. Valid values:
     *
     *   **0**: The RASP feature is not supported.
     *   **1**: The RASP feature is in Monitor mode.
     *   **2**: The RASP feature is in Block mode.
     *   **3**: The RASP feature is disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $raspStatus;

    /**
     * @description The ID of the region in which the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The Common Vulnerabilities and Exposures (CVE) IDs related to the vulnerability. Multiple CVE IDs are separated by commas (,).
     *
     * @example CVE-2017-7518,CVE-2017-12188
     *
     * @var string
     */
    public $related;

    /**
     * @description The timestamp that was generated when the vulnerability was fixed. Unit: milliseconds.
     *
     * @example 1541207563000
     *
     * @var int
     */
    public $repairTs;

    /**
     * @description The code that indicates the fixing result of the vulnerability.
     *
     * @example 0
     *
     * @var string
     */
    public $resultCode;

    /**
     * @description The message that indicates the fixing result of the vulnerability.
     *
     * @example timeout
     *
     * @var string
     */
    public $resultMessage;

    /**
     * @description The status of the vulnerability. Valid values:
     *
     *   **1**: The vulnerability is unfixed.
     *   **2**: The vulnerability failed to be fixed.
     *   **3**: The system failed to be rolled back.
     *   **4**: The vulnerability is being fixed.
     *   **5**: The system is being rolled back.
     *   **6**: The vulnerability is being verified.
     *   **7**: The vulnerability is fixed.
     *   **8**: The vulnerability is fixed and the system is to be restarted.
     *   **9**: The system is rolled back.
     *   **10**: The vulnerability is ignored.
     *   **11**: The system is rolled back and is to be restarted.
     *   **12**: The vulnerability is not found.
     *   **20**: The vulnerability expires.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The tag of the vulnerability.
     *
     * @example oval
     *
     * @var string
     */
    public $tag;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **emg**: urgent vulnerability
     *   **app**: application vulnerability
     *   **sca**: application vulnerability that is detected by using Software Component Analysis (SCA).
     *
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @description The instance UUID of the asset.
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
        'k8sClusterId'      => 'K8sClusterId',
        'k8sNamespace'      => 'K8sNamespace',
        'k8sNodeId'         => 'K8sNodeId',
        'k8sNodeName'       => 'K8sNodeName',
        'k8sPodName'        => 'K8sPodName',
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
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }
        if (null !== $this->k8sNamespace) {
            $res['K8sNamespace'] = $this->k8sNamespace;
        }
        if (null !== $this->k8sNodeId) {
            $res['K8sNodeId'] = $this->k8sNodeId;
        }
        if (null !== $this->k8sNodeName) {
            $res['K8sNodeName'] = $this->k8sNodeName;
        }
        if (null !== $this->k8sPodName) {
            $res['K8sPodName'] = $this->k8sPodName;
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
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['K8sNamespace'])) {
            $model->k8sNamespace = $map['K8sNamespace'];
        }
        if (isset($map['K8sNodeId'])) {
            $model->k8sNodeId = $map['K8sNodeId'];
        }
        if (isset($map['K8sNodeName'])) {
            $model->k8sNodeName = $map['K8sNodeName'];
        }
        if (isset($map['K8sPodName'])) {
            $model->k8sPodName = $map['K8sPodName'];
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
