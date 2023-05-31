<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @description The number of the servers on which the anti-ransomware agent is in an abnormal state.
     *
     * @example 2
     *
     * @var int
     */
    public $clientErrorCount;

    /**
     * @description The UUIDs of the servers on which the anti-ransomware agent is in an **abnormal** state.
     *
     * @var string[]
     */
    public $clientErrorUuidList;

    /**
     * @description The status of the anti-ransomware agent. Valid values:
     *
     *   **running**: normal
     *   **exception**: abnormal
     *
     * @example running
     *
     * @var string
     */
    public $clientStatus;

    /**
     * @description The number of the servers on which the anti-ransomware agent is in a normal state.
     *
     * @example 2
     *
     * @var int
     */
    public $healthClientCount;

    /**
     * @description The UUIDs of the servers on which the anti-ransomware agent is in a **normal** state.
     *
     * @var string[]
     */
    public $healthClientUuidList;

    /**
     * @description The ID of the anti-ransomware policy.
     *
     * @example 11
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the anti-ransomware policy.
     *
     * @example SecurityStrategy-20200303
     *
     * @var string
     */
    public $name;

    /**
     * @description The configurations of the anti-ransomware policy. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **IsDefault**: the type of the anti-ransomware policy. Valid values:
     *
     *   **1**: recommended policy
     *   **0**: custom policy
     *
     *   **Include**: the format of the files that are protected. If the value of this field is \[], all formats of files are protected.
     *
     *   **Source**: the directory that is protected. If the value of this field is \[], all directories are protected.
     *
     *   **ExcludeSystemPath**: indicates whether a specified directory is excluded from the anti-ransomware policy. If the value of this field is **true**, the directory is excluded. If this field is left empty, no directories are excluded.
     *
     *   **Exclude**: the directory that is excluded from the anti-ransomware policy. If no directory is specified, the value of this field is \[].
     *
     *   **Schedule**: the start time and interval of a data backup task. A start time that begins during off-peak hours but does not start on the hour is recommended. Examples:
     *
     *   If the value of this field is I|1583216092|P21D, the data backup task starts from 2020-03-03 14:14:52, and the task is run at an interval of three weeks.
     *   If the value of this field is I|1583216092|PT24H, the data backup task starts from 2020-03-03 14:14:52, and the task is run at an interval of 24 hours.
     *
     *   **Retention**: the period during which backup data is retained. Unit: days. If the value of this field is 7, backup data is retained for a week. If the value of this field is 365, backup data is retained for a year. If the value of this field is -1, backup data is permanently retained.
     *
     *   **SpeedLimiter**: the limit on the network bandwidth for data backup tasks. If the value of this field is 0:24:30720, the maximum bandwidth for a data backup task is 30 MB/s from 00:00 to 24:00.
     *
     *   **UseVss**: indicates whether the VSS feature is enabled. The feature is available only for Windows servers. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  The VSS feature is available only if you create the anti-ransomware policy for Windows servers. After you enable the feature, the number of backup failures due to running processes is significantly reduced. We recommend that you enable the VSS feature. After you enable the feature, the data of disks that are in the exFAT and FAT32 formats cannot be backed up.
     * @example {"Exclude":["/bin/","/usr/bin/","/sbin/","/boot/","/proc/","/sys/","/srv/","/lib/","/selinux/","/usr/sbin/","/run/","/lib32/","/lib64/","/lost+found/","/var/lib/kubelet/","/var/lib/ntp/proc","/var/lib/container","Windows\\","Python27\\","Program Files (x86)\\","Program Files\\","Boot\\","$RECYCLE.BIN","System Volume Information\\","Users\\Administrator\\NTUSER.DAT*","ProgramData\\","pagefile.sys","Users\\Default\\NTUSER.DAT*","Users\\Administrator\\ntuser.*"],"ExcludeSystemPath":true,"Include":[],"IsDefault":1,"Retention":7,"Schedule":"I|1630689360|PT24H","Source":[],"SpeedLimiter":"","UseVss":true}
     *
     * @var string
     */
    public $policy;

    /**
     * @description The ID of the region that you specified for data backup when you installed the anti-ransomware agent for the server not deployed on Alibaba Cloud.
     *
     * @example ch-hangzhou
     *
     * @var string
     */
    public $policyRegionId;

    /**
     * @description The version of the anti-ransomware policy. Valid values:
     *
     *   1.0.0
     *   2.0.0
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $policyVersion;

    /**
     * @description The UUIDs that are returned based on the value of the MachineRemark request parameter.
     *
     * @var string[]
     */
    public $remarkedUuidList;

    /**
     * @description The type of the server. Valid values:
     *
     *   **OUT_CLOUD**: server not deployed on Alibaba Cloud
     *   **ALIYUN**: Elastic Compute Service (ECS) instance
     *   **TRIPARTITE**: simple application server
     *
     * @example OUT_CLOUD
     *
     * @var string
     */
    public $serverType;

    /**
     * @description The number of servers on which data backup is exceptional.
     *
     * @example 2
     *
     * @var int
     */
    public $serviceErrorCount;

    /**
     * @description The UUIDs of the servers on which data backup is exceptional.
     *
     * @var string[]
     */
    public $serviceErrorUuidList;

    /**
     * @description The status of the anti-ransomware policy. Valid values:
     *
     *   **enabled**: The anti-ransomware policy is manually enabled.
     *   **disabled**: The anti-ransomware policy is manually disabled. After an anti-ransomware policy is disabled, the data backup task that is running based on the policy stops.
     *   **closed**: The anti-ransomware policy automatically stops because the anti-ransomware capacity is insufficient.
     *
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The upgrade status of the anti-ransomware policy. Valid values:
     *
     *   **NotUpgraded**
     *   **Upgrading**
     *   **UpgradeFailed**
     *   **UpgradeSuccess**
     *
     * @example Upgrading
     *
     * @var string
     */
    public $upgradeStatus;

    /**
     * @description The UUIDs of the servers to which the anti-ransomware policy is applied.
     *
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'clientErrorCount'     => 'ClientErrorCount',
        'clientErrorUuidList'  => 'ClientErrorUuidList',
        'clientStatus'         => 'ClientStatus',
        'healthClientCount'    => 'HealthClientCount',
        'healthClientUuidList' => 'HealthClientUuidList',
        'id'                   => 'Id',
        'name'                 => 'Name',
        'policy'               => 'Policy',
        'policyRegionId'       => 'PolicyRegionId',
        'policyVersion'        => 'PolicyVersion',
        'remarkedUuidList'     => 'RemarkedUuidList',
        'serverType'           => 'ServerType',
        'serviceErrorCount'    => 'ServiceErrorCount',
        'serviceErrorUuidList' => 'ServiceErrorUuidList',
        'status'               => 'Status',
        'upgradeStatus'        => 'UpgradeStatus',
        'uuidList'             => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientErrorCount) {
            $res['ClientErrorCount'] = $this->clientErrorCount;
        }
        if (null !== $this->clientErrorUuidList) {
            $res['ClientErrorUuidList'] = $this->clientErrorUuidList;
        }
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }
        if (null !== $this->healthClientCount) {
            $res['HealthClientCount'] = $this->healthClientCount;
        }
        if (null !== $this->healthClientUuidList) {
            $res['HealthClientUuidList'] = $this->healthClientUuidList;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->policyRegionId) {
            $res['PolicyRegionId'] = $this->policyRegionId;
        }
        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = $this->policyVersion;
        }
        if (null !== $this->remarkedUuidList) {
            $res['RemarkedUuidList'] = $this->remarkedUuidList;
        }
        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }
        if (null !== $this->serviceErrorCount) {
            $res['ServiceErrorCount'] = $this->serviceErrorCount;
        }
        if (null !== $this->serviceErrorUuidList) {
            $res['ServiceErrorUuidList'] = $this->serviceErrorUuidList;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->upgradeStatus) {
            $res['UpgradeStatus'] = $this->upgradeStatus;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientErrorCount'])) {
            $model->clientErrorCount = $map['ClientErrorCount'];
        }
        if (isset($map['ClientErrorUuidList'])) {
            if (!empty($map['ClientErrorUuidList'])) {
                $model->clientErrorUuidList = $map['ClientErrorUuidList'];
            }
        }
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }
        if (isset($map['HealthClientCount'])) {
            $model->healthClientCount = $map['HealthClientCount'];
        }
        if (isset($map['HealthClientUuidList'])) {
            if (!empty($map['HealthClientUuidList'])) {
                $model->healthClientUuidList = $map['HealthClientUuidList'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['PolicyRegionId'])) {
            $model->policyRegionId = $map['PolicyRegionId'];
        }
        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = $map['PolicyVersion'];
        }
        if (isset($map['RemarkedUuidList'])) {
            if (!empty($map['RemarkedUuidList'])) {
                $model->remarkedUuidList = $map['RemarkedUuidList'];
            }
        }
        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }
        if (isset($map['ServiceErrorCount'])) {
            $model->serviceErrorCount = $map['ServiceErrorCount'];
        }
        if (isset($map['ServiceErrorUuidList'])) {
            if (!empty($map['ServiceErrorUuidList'])) {
                $model->serviceErrorUuidList = $map['ServiceErrorUuidList'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpgradeStatus'])) {
            $model->upgradeStatus = $map['UpgradeStatus'];
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }

        return $model;
    }
}
