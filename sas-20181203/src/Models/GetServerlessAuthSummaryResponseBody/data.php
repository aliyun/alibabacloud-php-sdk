<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetServerlessAuthSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Enable auto-binding. Values:
     *
     * - **0**: Disabled
     * - **1**: Enabled
     * @example 1
     *
     * @var int
     */
    public $autoBind;

    /**
     * @description Indicates whether there is a pre-bound asset configuration. Pre-binding refers to the asset binding configuration selected in advance at the time of purchase. The values are: - **0**: No - **1**: Yes
     *
     * @example 1
     *
     * @var bool
     */
    public $hasPreBindSetting;

    /**
     * @description Whether it is a post-paid instance. Values:
     *
     * - **true**: Yes
     * - **false**: No
     * @example true
     *
     * @var bool
     */
    public $isPostPaid;

    /**
     * @description Serverless post-paid status. Values:
     * - **true**: Active
     * - **false**: Expired
     * @example true
     *
     * @var bool
     */
    public $isServerlessPostPaidValid;

    /**
     * @description Pay-as-you-go module switch. Values:
     *
     * - **VUL**: Vulnerability Repair Module
     * - **CSPM**: Cloud Security Posture Management Module
     * - **AGENTLESS**: Agentless Detection Module
     * - **SERVERLESS**: Serverless Security Module
     * - **CTDR**: Threat Analysis and Response Module
     * @example SERVERLESS
     *
     * @var string
     */
    public $postPaidModuleSwitch;

    /**
     * @description Post-paid activation time. Unit: milliseconds.
     *
     * @example 1655432638000
     *
     * @var int
     */
    public $postPaidOpenTime;

    /**
     * @description Post-paid instance status. Values:
     * - **1**: Active
     * - **2**: Suspended due to unpaid bills
     * @example 1
     *
     * @var int
     */
    public $postPaidStatus;

    /**
     * @description Post-paid instance ID.
     *
     * @example sas-postpay-**
     *
     * @var string
     */
    public $postpaidInstanceId;

    /**
     * @description Region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Total number of bound applications.
     *
     * @example 10
     *
     * @var int
     */
    public $totalBindAppCount;

    /**
     * @description Total number of bound cores.
     *
     * @example 1
     *
     * @var int
     */
    public $totalBindCoreCount;

    /**
     * @description Total number of bound instances.
     *
     * @example 1
     *
     * @var int
     */
    public $totalBindInstanceCount;

    /**
     * @description Total number of unbound applications.
     *
     * @example 1
     *
     * @var int
     */
    public $totalUnBindAppCount;

    /**
     * @description Total number of unbound cores.
     *
     * @example 1
     *
     * @var int
     */
    public $totalUnBindCoreCount;

    /**
     * @description Total number of unbound instances.
     *
     * @example 2
     *
     * @var int
     */
    public $totalUnBindInstanceCount;
    protected $_name = [
        'autoBind'                  => 'AutoBind',
        'hasPreBindSetting'         => 'HasPreBindSetting',
        'isPostPaid'                => 'IsPostPaid',
        'isServerlessPostPaidValid' => 'IsServerlessPostPaidValid',
        'postPaidModuleSwitch'      => 'PostPaidModuleSwitch',
        'postPaidOpenTime'          => 'PostPaidOpenTime',
        'postPaidStatus'            => 'PostPaidStatus',
        'postpaidInstanceId'        => 'PostpaidInstanceId',
        'regionId'                  => 'RegionId',
        'totalBindAppCount'         => 'TotalBindAppCount',
        'totalBindCoreCount'        => 'TotalBindCoreCount',
        'totalBindInstanceCount'    => 'TotalBindInstanceCount',
        'totalUnBindAppCount'       => 'TotalUnBindAppCount',
        'totalUnBindCoreCount'      => 'TotalUnBindCoreCount',
        'totalUnBindInstanceCount'  => 'TotalUnBindInstanceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoBind) {
            $res['AutoBind'] = $this->autoBind;
        }
        if (null !== $this->hasPreBindSetting) {
            $res['HasPreBindSetting'] = $this->hasPreBindSetting;
        }
        if (null !== $this->isPostPaid) {
            $res['IsPostPaid'] = $this->isPostPaid;
        }
        if (null !== $this->isServerlessPostPaidValid) {
            $res['IsServerlessPostPaidValid'] = $this->isServerlessPostPaidValid;
        }
        if (null !== $this->postPaidModuleSwitch) {
            $res['PostPaidModuleSwitch'] = $this->postPaidModuleSwitch;
        }
        if (null !== $this->postPaidOpenTime) {
            $res['PostPaidOpenTime'] = $this->postPaidOpenTime;
        }
        if (null !== $this->postPaidStatus) {
            $res['PostPaidStatus'] = $this->postPaidStatus;
        }
        if (null !== $this->postpaidInstanceId) {
            $res['PostpaidInstanceId'] = $this->postpaidInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->totalBindAppCount) {
            $res['TotalBindAppCount'] = $this->totalBindAppCount;
        }
        if (null !== $this->totalBindCoreCount) {
            $res['TotalBindCoreCount'] = $this->totalBindCoreCount;
        }
        if (null !== $this->totalBindInstanceCount) {
            $res['TotalBindInstanceCount'] = $this->totalBindInstanceCount;
        }
        if (null !== $this->totalUnBindAppCount) {
            $res['TotalUnBindAppCount'] = $this->totalUnBindAppCount;
        }
        if (null !== $this->totalUnBindCoreCount) {
            $res['TotalUnBindCoreCount'] = $this->totalUnBindCoreCount;
        }
        if (null !== $this->totalUnBindInstanceCount) {
            $res['TotalUnBindInstanceCount'] = $this->totalUnBindInstanceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoBind'])) {
            $model->autoBind = $map['AutoBind'];
        }
        if (isset($map['HasPreBindSetting'])) {
            $model->hasPreBindSetting = $map['HasPreBindSetting'];
        }
        if (isset($map['IsPostPaid'])) {
            $model->isPostPaid = $map['IsPostPaid'];
        }
        if (isset($map['IsServerlessPostPaidValid'])) {
            $model->isServerlessPostPaidValid = $map['IsServerlessPostPaidValid'];
        }
        if (isset($map['PostPaidModuleSwitch'])) {
            $model->postPaidModuleSwitch = $map['PostPaidModuleSwitch'];
        }
        if (isset($map['PostPaidOpenTime'])) {
            $model->postPaidOpenTime = $map['PostPaidOpenTime'];
        }
        if (isset($map['PostPaidStatus'])) {
            $model->postPaidStatus = $map['PostPaidStatus'];
        }
        if (isset($map['PostpaidInstanceId'])) {
            $model->postpaidInstanceId = $map['PostpaidInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TotalBindAppCount'])) {
            $model->totalBindAppCount = $map['TotalBindAppCount'];
        }
        if (isset($map['TotalBindCoreCount'])) {
            $model->totalBindCoreCount = $map['TotalBindCoreCount'];
        }
        if (isset($map['TotalBindInstanceCount'])) {
            $model->totalBindInstanceCount = $map['TotalBindInstanceCount'];
        }
        if (isset($map['TotalUnBindAppCount'])) {
            $model->totalUnBindAppCount = $map['TotalUnBindAppCount'];
        }
        if (isset($map['TotalUnBindCoreCount'])) {
            $model->totalUnBindCoreCount = $map['TotalUnBindCoreCount'];
        }
        if (isset($map['TotalUnBindInstanceCount'])) {
            $model->totalUnBindInstanceCount = $map['TotalUnBindInstanceCount'];
        }

        return $model;
    }
}
