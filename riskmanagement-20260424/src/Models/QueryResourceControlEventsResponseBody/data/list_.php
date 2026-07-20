<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\QueryResourceControlEventsResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $actionCode;

    /**
     * @var string
     */
    public $actionName;

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
     * @var int
     */
    public $applyRecordCount;

    /**
     * @var string
     */
    public $applyStatus;

    /**
     * @var bool
     */
    public $applyTrial;

    /**
     * @var string
     */
    public $businessName;

    /**
     * @var string
     */
    public $caseCode;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $extras;

    /**
     * @var string
     */
    public $formType;

    /**
     * @var string
     */
    public $gmtLatest;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $lastCheckTime;

    /**
     * @var string
     */
    public $preCloseTime;

    /**
     * @var string
     */
    public $punishFrom;

    /**
     * @var string
     */
    public $punishTime;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $reinforcement;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $supportBatchApply;

    /**
     * @var bool
     */
    public $supportSingleApply;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'actionCode' => 'ActionCode',
        'actionName' => 'ActionName',
        'alertEndTime' => 'AlertEndTime',
        'alertStartTime' => 'AlertStartTime',
        'antiPunishTime' => 'AntiPunishTime',
        'applyRecordCount' => 'ApplyRecordCount',
        'applyStatus' => 'ApplyStatus',
        'applyTrial' => 'ApplyTrial',
        'businessName' => 'BusinessName',
        'caseCode' => 'CaseCode',
        'domain' => 'Domain',
        'eventId' => 'EventId',
        'eventName' => 'EventName',
        'extras' => 'Extras',
        'formType' => 'FormType',
        'gmtLatest' => 'GmtLatest',
        'instanceId' => 'InstanceId',
        'ip' => 'Ip',
        'lastCheckTime' => 'LastCheckTime',
        'preCloseTime' => 'PreCloseTime',
        'punishFrom' => 'PunishFrom',
        'punishTime' => 'PunishTime',
        'reason' => 'Reason',
        'region' => 'Region',
        'regionId' => 'RegionId',
        'reinforcement' => 'Reinforcement',
        'status' => 'Status',
        'supportBatchApply' => 'SupportBatchApply',
        'supportSingleApply' => 'SupportSingleApply',
        'triggerType' => 'TriggerType',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionCode) {
            $res['ActionCode'] = $this->actionCode;
        }

        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }

        if (null !== $this->alertEndTime) {
            $res['AlertEndTime'] = $this->alertEndTime;
        }

        if (null !== $this->alertStartTime) {
            $res['AlertStartTime'] = $this->alertStartTime;
        }

        if (null !== $this->antiPunishTime) {
            $res['AntiPunishTime'] = $this->antiPunishTime;
        }

        if (null !== $this->applyRecordCount) {
            $res['ApplyRecordCount'] = $this->applyRecordCount;
        }

        if (null !== $this->applyStatus) {
            $res['ApplyStatus'] = $this->applyStatus;
        }

        if (null !== $this->applyTrial) {
            $res['ApplyTrial'] = $this->applyTrial;
        }

        if (null !== $this->businessName) {
            $res['BusinessName'] = $this->businessName;
        }

        if (null !== $this->caseCode) {
            $res['CaseCode'] = $this->caseCode;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->extras) {
            $res['Extras'] = $this->extras;
        }

        if (null !== $this->formType) {
            $res['FormType'] = $this->formType;
        }

        if (null !== $this->gmtLatest) {
            $res['GmtLatest'] = $this->gmtLatest;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->lastCheckTime) {
            $res['LastCheckTime'] = $this->lastCheckTime;
        }

        if (null !== $this->preCloseTime) {
            $res['PreCloseTime'] = $this->preCloseTime;
        }

        if (null !== $this->punishFrom) {
            $res['PunishFrom'] = $this->punishFrom;
        }

        if (null !== $this->punishTime) {
            $res['PunishTime'] = $this->punishTime;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reinforcement) {
            $res['Reinforcement'] = $this->reinforcement;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supportBatchApply) {
            $res['SupportBatchApply'] = $this->supportBatchApply;
        }

        if (null !== $this->supportSingleApply) {
            $res['SupportSingleApply'] = $this->supportSingleApply;
        }

        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['ActionCode'])) {
            $model->actionCode = $map['ActionCode'];
        }

        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }

        if (isset($map['AlertEndTime'])) {
            $model->alertEndTime = $map['AlertEndTime'];
        }

        if (isset($map['AlertStartTime'])) {
            $model->alertStartTime = $map['AlertStartTime'];
        }

        if (isset($map['AntiPunishTime'])) {
            $model->antiPunishTime = $map['AntiPunishTime'];
        }

        if (isset($map['ApplyRecordCount'])) {
            $model->applyRecordCount = $map['ApplyRecordCount'];
        }

        if (isset($map['ApplyStatus'])) {
            $model->applyStatus = $map['ApplyStatus'];
        }

        if (isset($map['ApplyTrial'])) {
            $model->applyTrial = $map['ApplyTrial'];
        }

        if (isset($map['BusinessName'])) {
            $model->businessName = $map['BusinessName'];
        }

        if (isset($map['CaseCode'])) {
            $model->caseCode = $map['CaseCode'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['Extras'])) {
            $model->extras = $map['Extras'];
        }

        if (isset($map['FormType'])) {
            $model->formType = $map['FormType'];
        }

        if (isset($map['GmtLatest'])) {
            $model->gmtLatest = $map['GmtLatest'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['LastCheckTime'])) {
            $model->lastCheckTime = $map['LastCheckTime'];
        }

        if (isset($map['PreCloseTime'])) {
            $model->preCloseTime = $map['PreCloseTime'];
        }

        if (isset($map['PunishFrom'])) {
            $model->punishFrom = $map['PunishFrom'];
        }

        if (isset($map['PunishTime'])) {
            $model->punishTime = $map['PunishTime'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Reinforcement'])) {
            $model->reinforcement = $map['Reinforcement'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupportBatchApply'])) {
            $model->supportBatchApply = $map['SupportBatchApply'];
        }

        if (isset($map['SupportSingleApply'])) {
            $model->supportSingleApply = $map['SupportSingleApply'];
        }

        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
