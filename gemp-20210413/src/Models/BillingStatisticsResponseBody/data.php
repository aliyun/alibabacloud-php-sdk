<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\BillingStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $appUserCount;

    /**
     * @var int
     */
    public $appUserCountFree;

    /**
     * @var int
     */
    public $emailSend;

    /**
     * @var int
     */
    public $emailSendFree;

    /**
     * @var int
     */
    public $escalationPlanCount;

    /**
     * @var int
     */
    public $escalationPlanCountFree;

    /**
     * @var int
     */
    public $eventReportApi;

    /**
     * @var int
     */
    public $eventReportApiFree;

    /**
     * @var int
     */
    public $hasScheduleServiceGroupCount;

    /**
     * @var int
     */
    public $hasScheduleServiceGroupCountFree;

    /**
     * @var int
     */
    public $imMsgSend;

    /**
     * @var int
     */
    public $imMsgSendFree;

    /**
     * @var int
     */
    public $ruleCount;

    /**
     * @var int
     */
    public $ruleCountFree;

    /**
     * @var int
     */
    public $smsSend;

    /**
     * @var int
     */
    public $smsSendFree;

    /**
     * @var int
     */
    public $subscriptionNotifyCount;

    /**
     * @var int
     */
    public $subscriptionNotifyCountFree;

    /**
     * @var bool
     */
    public $type;

    /**
     * @var int
     */
    public $voiceSend;

    /**
     * @var int
     */
    public $voiceSendFree;
    protected $_name = [
        'appUserCount'                     => 'appUserCount',
        'appUserCountFree'                 => 'appUserCountFree',
        'emailSend'                        => 'emailSend',
        'emailSendFree'                    => 'emailSendFree',
        'escalationPlanCount'              => 'escalationPlanCount',
        'escalationPlanCountFree'          => 'escalationPlanCountFree',
        'eventReportApi'                   => 'eventReportApi',
        'eventReportApiFree'               => 'eventReportApiFree',
        'hasScheduleServiceGroupCount'     => 'hasScheduleServiceGroupCount',
        'hasScheduleServiceGroupCountFree' => 'hasScheduleServiceGroupCountFree',
        'imMsgSend'                        => 'imMsgSend',
        'imMsgSendFree'                    => 'imMsgSendFree',
        'ruleCount'                        => 'ruleCount',
        'ruleCountFree'                    => 'ruleCountFree',
        'smsSend'                          => 'smsSend',
        'smsSendFree'                      => 'smsSendFree',
        'subscriptionNotifyCount'          => 'subscriptionNotifyCount',
        'subscriptionNotifyCountFree'      => 'subscriptionNotifyCountFree',
        'type'                             => 'type',
        'voiceSend'                        => 'voiceSend',
        'voiceSendFree'                    => 'voiceSendFree',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUserCount) {
            $res['appUserCount'] = $this->appUserCount;
        }
        if (null !== $this->appUserCountFree) {
            $res['appUserCountFree'] = $this->appUserCountFree;
        }
        if (null !== $this->emailSend) {
            $res['emailSend'] = $this->emailSend;
        }
        if (null !== $this->emailSendFree) {
            $res['emailSendFree'] = $this->emailSendFree;
        }
        if (null !== $this->escalationPlanCount) {
            $res['escalationPlanCount'] = $this->escalationPlanCount;
        }
        if (null !== $this->escalationPlanCountFree) {
            $res['escalationPlanCountFree'] = $this->escalationPlanCountFree;
        }
        if (null !== $this->eventReportApi) {
            $res['eventReportApi'] = $this->eventReportApi;
        }
        if (null !== $this->eventReportApiFree) {
            $res['eventReportApiFree'] = $this->eventReportApiFree;
        }
        if (null !== $this->hasScheduleServiceGroupCount) {
            $res['hasScheduleServiceGroupCount'] = $this->hasScheduleServiceGroupCount;
        }
        if (null !== $this->hasScheduleServiceGroupCountFree) {
            $res['hasScheduleServiceGroupCountFree'] = $this->hasScheduleServiceGroupCountFree;
        }
        if (null !== $this->imMsgSend) {
            $res['imMsgSend'] = $this->imMsgSend;
        }
        if (null !== $this->imMsgSendFree) {
            $res['imMsgSendFree'] = $this->imMsgSendFree;
        }
        if (null !== $this->ruleCount) {
            $res['ruleCount'] = $this->ruleCount;
        }
        if (null !== $this->ruleCountFree) {
            $res['ruleCountFree'] = $this->ruleCountFree;
        }
        if (null !== $this->smsSend) {
            $res['smsSend'] = $this->smsSend;
        }
        if (null !== $this->smsSendFree) {
            $res['smsSendFree'] = $this->smsSendFree;
        }
        if (null !== $this->subscriptionNotifyCount) {
            $res['subscriptionNotifyCount'] = $this->subscriptionNotifyCount;
        }
        if (null !== $this->subscriptionNotifyCountFree) {
            $res['subscriptionNotifyCountFree'] = $this->subscriptionNotifyCountFree;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->voiceSend) {
            $res['voiceSend'] = $this->voiceSend;
        }
        if (null !== $this->voiceSendFree) {
            $res['voiceSendFree'] = $this->voiceSendFree;
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
        if (isset($map['appUserCount'])) {
            $model->appUserCount = $map['appUserCount'];
        }
        if (isset($map['appUserCountFree'])) {
            $model->appUserCountFree = $map['appUserCountFree'];
        }
        if (isset($map['emailSend'])) {
            $model->emailSend = $map['emailSend'];
        }
        if (isset($map['emailSendFree'])) {
            $model->emailSendFree = $map['emailSendFree'];
        }
        if (isset($map['escalationPlanCount'])) {
            $model->escalationPlanCount = $map['escalationPlanCount'];
        }
        if (isset($map['escalationPlanCountFree'])) {
            $model->escalationPlanCountFree = $map['escalationPlanCountFree'];
        }
        if (isset($map['eventReportApi'])) {
            $model->eventReportApi = $map['eventReportApi'];
        }
        if (isset($map['eventReportApiFree'])) {
            $model->eventReportApiFree = $map['eventReportApiFree'];
        }
        if (isset($map['hasScheduleServiceGroupCount'])) {
            $model->hasScheduleServiceGroupCount = $map['hasScheduleServiceGroupCount'];
        }
        if (isset($map['hasScheduleServiceGroupCountFree'])) {
            $model->hasScheduleServiceGroupCountFree = $map['hasScheduleServiceGroupCountFree'];
        }
        if (isset($map['imMsgSend'])) {
            $model->imMsgSend = $map['imMsgSend'];
        }
        if (isset($map['imMsgSendFree'])) {
            $model->imMsgSendFree = $map['imMsgSendFree'];
        }
        if (isset($map['ruleCount'])) {
            $model->ruleCount = $map['ruleCount'];
        }
        if (isset($map['ruleCountFree'])) {
            $model->ruleCountFree = $map['ruleCountFree'];
        }
        if (isset($map['smsSend'])) {
            $model->smsSend = $map['smsSend'];
        }
        if (isset($map['smsSendFree'])) {
            $model->smsSendFree = $map['smsSendFree'];
        }
        if (isset($map['subscriptionNotifyCount'])) {
            $model->subscriptionNotifyCount = $map['subscriptionNotifyCount'];
        }
        if (isset($map['subscriptionNotifyCountFree'])) {
            $model->subscriptionNotifyCountFree = $map['subscriptionNotifyCountFree'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['voiceSend'])) {
            $model->voiceSend = $map['voiceSend'];
        }
        if (isset($map['voiceSendFree'])) {
            $model->voiceSendFree = $map['voiceSendFree'];
        }

        return $model;
    }
}
