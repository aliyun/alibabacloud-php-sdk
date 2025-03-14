<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetServerlessAppAuthDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Application ID.
     *
     * @example c932b7a0***
     *
     * @var string
     */
    public $appId;

    /**
     * @description Number of CPU cores.
     *
     * @example 2
     *
     * @var int
     */
    public $coreCount;

    /**
     * @description Number of instances.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description Whether authorization is bound. Values:
     *
     * - **true**: Yes
     * - **false**: No
     *
     * @example true
     *
     * @var bool
     */
    public $isBind;

    /**
     * @description Whether it is a post-paid instance. Values:
     *
     * - **true**: Yes
     * - **false**: No
     *
     * @example true
     *
     * @var bool
     */
    public $isPostPaid;

    /**
     * @description Serverless post-paid status. Values:
     * - **true**: Active
     * - **false**: Expired
     *
     * @example true
     *
     * @var bool
     */
    public $isServerlessPostPaidValid;

    /**
     * @description Pay-as-you-go module switch. Values:
     *
     * - **VUL**: Vulnerability repair module
     * - **CSPM**: Cloud Security Posture Management module
     * - **AGENTLESS**: Agentless detection module
     * - **SERVERLESS**: Serverless security module
     * - **CTDR**: Threat Detection and Response module
     *
     * @example SERVERLESS
     *
     * @var string
     */
    public $postPaidModuleSwitch;

    /**
     * @description Post-paid activation time.
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
     *
     * @example 1
     *
     * @var int
     */
    public $postPaidStatus;

    /**
     * @description Post-paid instance ID.
     *
     * @example 101
     *
     * @var string
     */
    public $postpaidInstanceId;
    protected $_name = [
        'appId' => 'AppId',
        'coreCount' => 'CoreCount',
        'instanceCount' => 'InstanceCount',
        'isBind' => 'IsBind',
        'isPostPaid' => 'IsPostPaid',
        'isServerlessPostPaidValid' => 'IsServerlessPostPaidValid',
        'postPaidModuleSwitch' => 'PostPaidModuleSwitch',
        'postPaidOpenTime' => 'PostPaidOpenTime',
        'postPaidStatus' => 'PostPaidStatus',
        'postpaidInstanceId' => 'PostpaidInstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->coreCount) {
            $res['CoreCount'] = $this->coreCount;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->isBind) {
            $res['IsBind'] = $this->isBind;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CoreCount'])) {
            $model->coreCount = $map['CoreCount'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['IsBind'])) {
            $model->isBind = $map['IsBind'];
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

        return $model;
    }
}
