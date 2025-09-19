<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetServerlessAuthSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $autoBind;

    /**
     * @var bool
     */
    public $hasPreBindSetting;

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

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $totalBindAppCount;

    /**
     * @var int
     */
    public $totalBindCoreCount;

    /**
     * @var int
     */
    public $totalBindInstanceCount;

    /**
     * @var int
     */
    public $totalUnBindAppCount;

    /**
     * @var int
     */
    public $totalUnBindCoreCount;

    /**
     * @var int
     */
    public $totalUnBindInstanceCount;
    protected $_name = [
        'autoBind' => 'AutoBind',
        'hasPreBindSetting' => 'HasPreBindSetting',
        'isPostPaid' => 'IsPostPaid',
        'isServerlessPostPaidValid' => 'IsServerlessPostPaidValid',
        'postPaidModuleSwitch' => 'PostPaidModuleSwitch',
        'postPaidOpenTime' => 'PostPaidOpenTime',
        'postPaidStatus' => 'PostPaidStatus',
        'postpaidInstanceId' => 'PostpaidInstanceId',
        'regionId' => 'RegionId',
        'totalBindAppCount' => 'TotalBindAppCount',
        'totalBindCoreCount' => 'TotalBindCoreCount',
        'totalBindInstanceCount' => 'TotalBindInstanceCount',
        'totalUnBindAppCount' => 'TotalUnBindAppCount',
        'totalUnBindCoreCount' => 'TotalUnBindCoreCount',
        'totalUnBindInstanceCount' => 'TotalUnBindInstanceCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
