<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetResourceControlEventResponseBody\data\applyRecordList;

use AlibabaCloud\Dara\Model;

class eventTimeRecord extends Model
{
    /**
     * @var string
     */
    public $alertEndTime;

    /**
     * @var string
     */
    public $alertStartTime;

    /**
     * @var string
     */
    public $antiPunishTime;

    /**
     * @var string
     */
    public $applyTime;

    /**
     * @var string
     */
    public $ignoreAlertTime;

    /**
     * @var string
     */
    public $instanceCloseTime;

    /**
     * @var string
     */
    public $instanceScanTime;

    /**
     * @var string
     */
    public $lastCheckTime;

    /**
     * @var string
     */
    public $miningAlertProcessTime;

    /**
     * @var string
     */
    public $preCloseTime;

    /**
     * @var string
     */
    public $processTime;

    /**
     * @var string
     */
    public $punishEndTime;

    /**
     * @var string
     */
    public $punishStartTime;

    /**
     * @var string
     */
    public $rejectTime;

    /**
     * @var string
     */
    public $removeTime;

    /**
     * @var string
     */
    public $riskCheckSuccessTime;
    protected $_name = [
        'alertEndTime' => 'AlertEndTime',
        'alertStartTime' => 'AlertStartTime',
        'antiPunishTime' => 'AntiPunishTime',
        'applyTime' => 'ApplyTime',
        'ignoreAlertTime' => 'IgnoreAlertTime',
        'instanceCloseTime' => 'InstanceCloseTime',
        'instanceScanTime' => 'InstanceScanTime',
        'lastCheckTime' => 'LastCheckTime',
        'miningAlertProcessTime' => 'MiningAlertProcessTime',
        'preCloseTime' => 'PreCloseTime',
        'processTime' => 'ProcessTime',
        'punishEndTime' => 'PunishEndTime',
        'punishStartTime' => 'PunishStartTime',
        'rejectTime' => 'RejectTime',
        'removeTime' => 'RemoveTime',
        'riskCheckSuccessTime' => 'RiskCheckSuccessTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertEndTime) {
            $res['AlertEndTime'] = $this->alertEndTime;
        }

        if (null !== $this->alertStartTime) {
            $res['AlertStartTime'] = $this->alertStartTime;
        }

        if (null !== $this->antiPunishTime) {
            $res['AntiPunishTime'] = $this->antiPunishTime;
        }

        if (null !== $this->applyTime) {
            $res['ApplyTime'] = $this->applyTime;
        }

        if (null !== $this->ignoreAlertTime) {
            $res['IgnoreAlertTime'] = $this->ignoreAlertTime;
        }

        if (null !== $this->instanceCloseTime) {
            $res['InstanceCloseTime'] = $this->instanceCloseTime;
        }

        if (null !== $this->instanceScanTime) {
            $res['InstanceScanTime'] = $this->instanceScanTime;
        }

        if (null !== $this->lastCheckTime) {
            $res['LastCheckTime'] = $this->lastCheckTime;
        }

        if (null !== $this->miningAlertProcessTime) {
            $res['MiningAlertProcessTime'] = $this->miningAlertProcessTime;
        }

        if (null !== $this->preCloseTime) {
            $res['PreCloseTime'] = $this->preCloseTime;
        }

        if (null !== $this->processTime) {
            $res['ProcessTime'] = $this->processTime;
        }

        if (null !== $this->punishEndTime) {
            $res['PunishEndTime'] = $this->punishEndTime;
        }

        if (null !== $this->punishStartTime) {
            $res['PunishStartTime'] = $this->punishStartTime;
        }

        if (null !== $this->rejectTime) {
            $res['RejectTime'] = $this->rejectTime;
        }

        if (null !== $this->removeTime) {
            $res['RemoveTime'] = $this->removeTime;
        }

        if (null !== $this->riskCheckSuccessTime) {
            $res['RiskCheckSuccessTime'] = $this->riskCheckSuccessTime;
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
        if (isset($map['AlertEndTime'])) {
            $model->alertEndTime = $map['AlertEndTime'];
        }

        if (isset($map['AlertStartTime'])) {
            $model->alertStartTime = $map['AlertStartTime'];
        }

        if (isset($map['AntiPunishTime'])) {
            $model->antiPunishTime = $map['AntiPunishTime'];
        }

        if (isset($map['ApplyTime'])) {
            $model->applyTime = $map['ApplyTime'];
        }

        if (isset($map['IgnoreAlertTime'])) {
            $model->ignoreAlertTime = $map['IgnoreAlertTime'];
        }

        if (isset($map['InstanceCloseTime'])) {
            $model->instanceCloseTime = $map['InstanceCloseTime'];
        }

        if (isset($map['InstanceScanTime'])) {
            $model->instanceScanTime = $map['InstanceScanTime'];
        }

        if (isset($map['LastCheckTime'])) {
            $model->lastCheckTime = $map['LastCheckTime'];
        }

        if (isset($map['MiningAlertProcessTime'])) {
            $model->miningAlertProcessTime = $map['MiningAlertProcessTime'];
        }

        if (isset($map['PreCloseTime'])) {
            $model->preCloseTime = $map['PreCloseTime'];
        }

        if (isset($map['ProcessTime'])) {
            $model->processTime = $map['ProcessTime'];
        }

        if (isset($map['PunishEndTime'])) {
            $model->punishEndTime = $map['PunishEndTime'];
        }

        if (isset($map['PunishStartTime'])) {
            $model->punishStartTime = $map['PunishStartTime'];
        }

        if (isset($map['RejectTime'])) {
            $model->rejectTime = $map['RejectTime'];
        }

        if (isset($map['RemoveTime'])) {
            $model->removeTime = $map['RemoveTime'];
        }

        if (isset($map['RiskCheckSuccessTime'])) {
            $model->riskCheckSuccessTime = $map['RiskCheckSuccessTime'];
        }

        return $model;
    }
}
