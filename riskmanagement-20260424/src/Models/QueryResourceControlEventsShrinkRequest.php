<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;

class QueryResourceControlEventsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $actionCode;

    /**
     * @var string
     */
    public $actionCodesShrink;

    /**
     * @var string
     */
    public $aliyunLang;

    /**
     * @var string
     */
    public $businessCode;

    /**
     * @var string
     */
    public $caseCodesPrefixShrink;

    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventCodesShrink;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventIdListShrink;

    /**
     * @var string
     */
    public $excludeActionCodesShrink;

    /**
     * @var string
     */
    public $excludeEventCodesShrink;

    /**
     * @var string
     */
    public $excludeReasonsShrink;

    /**
     * @var string
     */
    public $includeReasonsShrink;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $pageSize;

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
    public $reason;

    /**
     * @var string
     */
    public $sourceCodesShrink;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusListShrink;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'actionCode' => 'ActionCode',
        'actionCodesShrink' => 'ActionCodes',
        'aliyunLang' => 'AliyunLang',
        'businessCode' => 'BusinessCode',
        'caseCodesPrefixShrink' => 'CaseCodesPrefix',
        'current' => 'Current',
        'domain' => 'Domain',
        'eventCode' => 'EventCode',
        'eventCodesShrink' => 'EventCodes',
        'eventId' => 'EventId',
        'eventIdListShrink' => 'EventIdList',
        'excludeActionCodesShrink' => 'ExcludeActionCodes',
        'excludeEventCodesShrink' => 'ExcludeEventCodes',
        'excludeReasonsShrink' => 'ExcludeReasons',
        'includeReasonsShrink' => 'IncludeReasons',
        'instanceId' => 'InstanceId',
        'ip' => 'Ip',
        'pageSize' => 'PageSize',
        'punishEndTime' => 'PunishEndTime',
        'punishStartTime' => 'PunishStartTime',
        'reason' => 'Reason',
        'sourceCodesShrink' => 'SourceCodes',
        'status' => 'Status',
        'statusListShrink' => 'StatusList',
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

        if (null !== $this->actionCodesShrink) {
            $res['ActionCodes'] = $this->actionCodesShrink;
        }

        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }

        if (null !== $this->businessCode) {
            $res['BusinessCode'] = $this->businessCode;
        }

        if (null !== $this->caseCodesPrefixShrink) {
            $res['CaseCodesPrefix'] = $this->caseCodesPrefixShrink;
        }

        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->eventCode) {
            $res['EventCode'] = $this->eventCode;
        }

        if (null !== $this->eventCodesShrink) {
            $res['EventCodes'] = $this->eventCodesShrink;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventIdListShrink) {
            $res['EventIdList'] = $this->eventIdListShrink;
        }

        if (null !== $this->excludeActionCodesShrink) {
            $res['ExcludeActionCodes'] = $this->excludeActionCodesShrink;
        }

        if (null !== $this->excludeEventCodesShrink) {
            $res['ExcludeEventCodes'] = $this->excludeEventCodesShrink;
        }

        if (null !== $this->excludeReasonsShrink) {
            $res['ExcludeReasons'] = $this->excludeReasonsShrink;
        }

        if (null !== $this->includeReasonsShrink) {
            $res['IncludeReasons'] = $this->includeReasonsShrink;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->punishEndTime) {
            $res['PunishEndTime'] = $this->punishEndTime;
        }

        if (null !== $this->punishStartTime) {
            $res['PunishStartTime'] = $this->punishStartTime;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->sourceCodesShrink) {
            $res['SourceCodes'] = $this->sourceCodesShrink;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusListShrink) {
            $res['StatusList'] = $this->statusListShrink;
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

        if (isset($map['ActionCodes'])) {
            $model->actionCodesShrink = $map['ActionCodes'];
        }

        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }

        if (isset($map['BusinessCode'])) {
            $model->businessCode = $map['BusinessCode'];
        }

        if (isset($map['CaseCodesPrefix'])) {
            $model->caseCodesPrefixShrink = $map['CaseCodesPrefix'];
        }

        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['EventCode'])) {
            $model->eventCode = $map['EventCode'];
        }

        if (isset($map['EventCodes'])) {
            $model->eventCodesShrink = $map['EventCodes'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventIdList'])) {
            $model->eventIdListShrink = $map['EventIdList'];
        }

        if (isset($map['ExcludeActionCodes'])) {
            $model->excludeActionCodesShrink = $map['ExcludeActionCodes'];
        }

        if (isset($map['ExcludeEventCodes'])) {
            $model->excludeEventCodesShrink = $map['ExcludeEventCodes'];
        }

        if (isset($map['ExcludeReasons'])) {
            $model->excludeReasonsShrink = $map['ExcludeReasons'];
        }

        if (isset($map['IncludeReasons'])) {
            $model->includeReasonsShrink = $map['IncludeReasons'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PunishEndTime'])) {
            $model->punishEndTime = $map['PunishEndTime'];
        }

        if (isset($map['PunishStartTime'])) {
            $model->punishStartTime = $map['PunishStartTime'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['SourceCodes'])) {
            $model->sourceCodesShrink = $map['SourceCodes'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusList'])) {
            $model->statusListShrink = $map['StatusList'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
