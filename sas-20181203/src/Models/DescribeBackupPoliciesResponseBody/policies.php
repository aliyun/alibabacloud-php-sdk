<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @description The upgrade status of the anti-ransomware policy. Valid values:
     *
     *   **NotUpgraded**
     *   **Upgrading**
     *   **UpgradeFailed**
     *   **UpgradeSuccess**
     *
     * @example 2
     *
     * @var int
     */
    public $clientErrorCount;

    /**
     * @description The UUIDs of the servers to which the anti-ransomware policy is applied.
     *
     * @var string[]
     */
    public $clientErrorUuidList;

    /**
     * @description The UUIDs of the servers on which the anti-ransomware agent is in an **abnormal** state.
     *
     * @example running
     *
     * @var string
     */
    public $clientStatus;

    /**
     * @description The UUIDs that are returned based on the value of the MachineRemark request parameter.
     *
     * @example 2
     *
     * @var int
     */
    public $healthClientCount;

    /**
     * @description The total number of anti-ransomware policies returned.
     *
     * @var string[]
     */
    public $healthClientUuidList;

    /**
     * @description The UUIDs that are returned based on the value of the MachineRemark request parameter.
     *
     * @example 11
     *
     * @var int
     */
    public $id;

    /**
     * @description The UUIDs of the servers on which the anti-ransomware agent is in an **abnormal** state.
     *
     * @example SecurityStrategy-20200303
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the anti-ransomware agent. Valid values:
     *
     *   **running**: normal
     *   **exception**: abnormal
     *
     * @example {"Exclude":["/bin/","/usr/bin/","/sbin/","/boot/","/proc/","/sys/","/srv/","/lib/","/selinux/","/usr/sbin/","/run/","/lib32/","/lib64/","/lost+found/","/var/lib/kubelet/","/var/lib/ntp/proc","/var/lib/container","Windows\\","Python27\\","Program Files (x86)\\","Program Files\\","Boot\\","$RECYCLE.BIN","System Volume Information\\","Users\\Administrator\\NTUSER.DAT*","ProgramData\\","pagefile.sys","Users\\Default\\NTUSER.DAT*","Users\\Administrator\\ntuser.*"],"ExcludeSystemPath":true,"Include":[],"IsDefault":1,"Retention":7,"Schedule":"I|1630689360|PT24H","Source":[],"SpeedLimiter":"","UseVss":true}
     *
     * @var string
     */
    public $policy;

    /**
     * @description The ID of the anti-ransomware policy.
     *
     * @example ch-hangzhou
     *
     * @var string
     */
    public $policyRegionId;

    /**
     * @description The ID of the region that you specified for data backup when you installed the anti-ransomware agent for the server not deployed on Alibaba Cloud.
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $policyVersion;

    /**
     * @description The UUIDs of the servers on which data backup is exceptional.
     *
     * @var string[]
     */
    public $remarkedUuidList;

    /**
     * @description The UUIDs of the servers on which the anti-ransomware agent is in a **normal** state.
     *
     * @example OUT_CLOUD
     *
     * @var string
     */
    public $serverType;

    /**
     * @description The number of the servers on which the anti-ransomware agent is in a normal state.
     *
     * @example 2
     *
     * @var int
     */
    public $serviceErrorCount;

    /**
     * @description The type of the server. Valid values:
     *
     *   **OUT_CLOUD**: server not deployed on Alibaba Cloud
     *   **ALIYUN**: Elastic Compute Service (ECS) instance
     *   **TRIPARTITE**: simple application server
     *
     * @var string[]
     */
    public $serviceErrorUuidList;

    /**
     * @description The number of servers on which data backup is exceptional.
     *
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the anti-ransomware policy.
     *
     * @example Upgrading
     *
     * @var string
     */
    public $upgradeStatus;

    /**
     * @description The UUIDs of the servers on which the anti-ransomware agent is in a **normal** state.
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
