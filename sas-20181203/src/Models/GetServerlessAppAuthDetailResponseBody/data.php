<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetServerlessAppAuthDetailResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $coreCount;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var bool
     */
    public $isBind;

    /**
     * @var bool
     */
    public $isPostPaid;

    /**
     * @var bool
     */
    public $isServerlessPostPaidValid;

    /**
     * @var string
     */
    public $postPaidModuleSwitch;

    /**
     * @var int
     */
    public $postPaidOpenTime;

    /**
     * @var int
     */
    public $postPaidStatus;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
