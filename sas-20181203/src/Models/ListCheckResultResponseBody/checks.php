<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckResultResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckResultResponseBody\checks\checkPolicies;
use AlibabaCloud\Tea\Model;

class checks extends Model
{
    /**
     * @description The ID of the check item.
     *
     * @example 5
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The check policies.
     *
     * @var checkPolicies[]
     */
    public $checkPolicies;

    /**
     * @var int
     */
    public $checkSaleType;

    /**
     * @description The name of the check item.
     *
     * @example OSS-PublicReadOpenManifestFileWithoutEncryption
     *
     * @var string
     */
    public $checkShowName;

    /**
     * @description The asset subtype of the cloud service. Valid values:
     *
     *   If **InstanceType** is set to **ECS**, this parameter supports the following valid values:
     *
     *   **INSTANCE**
     *   **DISK**
     *   **SECURITY_GROUP**
     *
     *   If **InstanceType** is set to **ACR**, this parameter supports the following valid values:
     *
     *   **REPOSITORY_ENTERPRISE**
     *   **REPOSITORY_PERSON**
     *
     *   If **InstanceType** is set to **RAM**, this parameter supports the following valid values:
     *
     *   **ALIAS**
     *   **USER**
     *   **POLICY**
     *   **GROUP**
     *
     *   If **InstanceType** is set to **WAF**, this parameter supports the following valid value:
     *
     *   **DOMAIN**
     *
     *   If **InstanceType** is set to other values, this parameter supports the following valid value:
     *
     *   **INSTANCE**
     *
     * @example DISK
     *
     * @var string
     */
    public $instanceSubType;

    /**
     * @description The asset type of the cloud service. Valid values:
     *
     *   **ECS**: ECS
     *   **SLB**: SLB
     *   **RDS**: ApsaraDB RDS
     *   **MONGODB**: MongoDB
     *   **KVSTORE**: Redis
     *   **ACR**: Container Registry
     *   **CSK**: ACK
     *   **VPC**: VPC
     *   **ACTIONTRAIL**: ActionTrail
     *   **CDN**: CDN
     *   **CAS**: Certificate Management Service (formerly SSL Certificates Service)
     *   **RDC**: Apsara Devops
     *   **RAM**: RAM
     *   **DDOS**: Anti-DDoS
     *   **WAF**: WAF
     *   **OSS**: OSS
     *   **POLARDB**: PolarDB
     *   **POSTGRESQL**: ApsaraDB RDS for PostgreSQL
     *   **MSE**: MSE
     *   **NAS**: NAS
     *   **SDDP**: SDDP
     *   **EIP**: EIP
     *
     * @example ECS
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The timestamp when the last check was performed. Unit: milliseconds.
     *
     * @example 1657793398000
     *
     * @var int
     */
    public $lastCheckTime;

    /**
     * @description The risk level of the check item. Valid values:
     *
     *   **HIGH**
     *   **MEDIUM**
     *   **LOW**
     *
     * @example HIGH
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The status of the check item. Valid values:
     *
     *   **PASS**: passed
     *   **NOT_PASS**: failed
     *   **CHECKING**: being checked
     *   **NOT_CHECK**: not checked
     *   **WHITELIST**: added to the whitelist
     *
     * @example PASS
     *
     * @var string
     */
    public $status;

    /**
     * @description The message returned if the status of the check item is abnormal.
     *
     * @example TIMEOUT
     *
     * @var string
     */
    public $statusMessage;

    /**
     * @description The ID of the check task.
     *
     * @example 64
     *
     * @var string
     */
    public $taskId;

    /**
     * @description Indicates whether the TRIAL permission is required.
     *
     * @example true
     *
     * @var bool
     */
    public $trialPermission;

    /**
     * @description The cloud service provider.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $vendor;

    /**
     * @description The name of the cloud service provider.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $vendorShowName;
    protected $_name = [
        'checkId'         => 'CheckId',
        'checkPolicies'   => 'CheckPolicies',
        'checkSaleType'   => 'CheckSaleType',
        'checkShowName'   => 'CheckShowName',
        'instanceSubType' => 'InstanceSubType',
        'instanceType'    => 'InstanceType',
        'lastCheckTime'   => 'LastCheckTime',
        'riskLevel'       => 'RiskLevel',
        'status'          => 'Status',
        'statusMessage'   => 'StatusMessage',
        'taskId'          => 'TaskId',
        'trialPermission' => 'TrialPermission',
        'vendor'          => 'Vendor',
        'vendorShowName'  => 'VendorShowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->checkPolicies) {
            $res['CheckPolicies'] = [];
            if (null !== $this->checkPolicies && \is_array($this->checkPolicies)) {
                $n = 0;
                foreach ($this->checkPolicies as $item) {
                    $res['CheckPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->checkSaleType) {
            $res['CheckSaleType'] = $this->checkSaleType;
        }
        if (null !== $this->checkShowName) {
            $res['CheckShowName'] = $this->checkShowName;
        }
        if (null !== $this->instanceSubType) {
            $res['InstanceSubType'] = $this->instanceSubType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->lastCheckTime) {
            $res['LastCheckTime'] = $this->lastCheckTime;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->trialPermission) {
            $res['TrialPermission'] = $this->trialPermission;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->vendorShowName) {
            $res['VendorShowName'] = $this->vendorShowName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['CheckPolicies'])) {
            if (!empty($map['CheckPolicies'])) {
                $model->checkPolicies = [];
                $n                    = 0;
                foreach ($map['CheckPolicies'] as $item) {
                    $model->checkPolicies[$n++] = null !== $item ? checkPolicies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CheckSaleType'])) {
            $model->checkSaleType = $map['CheckSaleType'];
        }
        if (isset($map['CheckShowName'])) {
            $model->checkShowName = $map['CheckShowName'];
        }
        if (isset($map['InstanceSubType'])) {
            $model->instanceSubType = $map['InstanceSubType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['LastCheckTime'])) {
            $model->lastCheckTime = $map['LastCheckTime'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TrialPermission'])) {
            $model->trialPermission = $map['TrialPermission'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['VendorShowName'])) {
            $model->vendorShowName = $map['VendorShowName'];
        }

        return $model;
    }
}
