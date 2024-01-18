<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class PushTemplateRequest extends Model
{
    /**
     * @var mixed
     */
    public $activityContentState;

    /**
     * @var string
     */
    public $activityEvent;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $classification;

    /**
     * @var int
     */
    public $deliveryType;

    /**
     * @var int
     */
    public $dismissalDate;

    /**
     * @var int
     */
    public $expiredSeconds;

    /**
     * @var string
     */
    public $extendedParams;

    /**
     * @var string
     */
    public $miChannelId;

    /**
     * @var string
     */
    public $notifyType;

    /**
     * @var int
     */
    public $pushAction;

    /**
     * @var int
     */
    public $silent;

    /**
     * @var string
     */
    public $smsSignName;

    /**
     * @var int
     */
    public $smsStrategy;

    /**
     * @var string
     */
    public $smsTemplateCode;

    /**
     * @var string
     */
    public $smsTemplateParam;

    /**
     * @var string
     */
    public $strategyContent;

    /**
     * @var int
     */
    public $strategyType;

    /**
     * @var string
     */
    public $targetMsgkey;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $templateKeyValue;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var mixed[]
     */
    public $thirdChannelCategory;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'activityContentState' => 'ActivityContentState',
        'activityEvent'        => 'ActivityEvent',
        'appId'                => 'AppId',
        'channelId'            => 'ChannelId',
        'classification'       => 'Classification',
        'deliveryType'         => 'DeliveryType',
        'dismissalDate'        => 'DismissalDate',
        'expiredSeconds'       => 'ExpiredSeconds',
        'extendedParams'       => 'ExtendedParams',
        'miChannelId'          => 'MiChannelId',
        'notifyType'           => 'NotifyType',
        'pushAction'           => 'PushAction',
        'silent'               => 'Silent',
        'smsSignName'          => 'SmsSignName',
        'smsStrategy'          => 'SmsStrategy',
        'smsTemplateCode'      => 'SmsTemplateCode',
        'smsTemplateParam'     => 'SmsTemplateParam',
        'strategyContent'      => 'StrategyContent',
        'strategyType'         => 'StrategyType',
        'targetMsgkey'         => 'TargetMsgkey',
        'taskName'             => 'TaskName',
        'templateKeyValue'     => 'TemplateKeyValue',
        'templateName'         => 'TemplateName',
        'thirdChannelCategory' => 'ThirdChannelCategory',
        'workspaceId'          => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityContentState) {
            $res['ActivityContentState'] = $this->activityContentState;
        }
        if (null !== $this->activityEvent) {
            $res['ActivityEvent'] = $this->activityEvent;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->deliveryType) {
            $res['DeliveryType'] = $this->deliveryType;
        }
        if (null !== $this->dismissalDate) {
            $res['DismissalDate'] = $this->dismissalDate;
        }
        if (null !== $this->expiredSeconds) {
            $res['ExpiredSeconds'] = $this->expiredSeconds;
        }
        if (null !== $this->extendedParams) {
            $res['ExtendedParams'] = $this->extendedParams;
        }
        if (null !== $this->miChannelId) {
            $res['MiChannelId'] = $this->miChannelId;
        }
        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
        }
        if (null !== $this->pushAction) {
            $res['PushAction'] = $this->pushAction;
        }
        if (null !== $this->silent) {
            $res['Silent'] = $this->silent;
        }
        if (null !== $this->smsSignName) {
            $res['SmsSignName'] = $this->smsSignName;
        }
        if (null !== $this->smsStrategy) {
            $res['SmsStrategy'] = $this->smsStrategy;
        }
        if (null !== $this->smsTemplateCode) {
            $res['SmsTemplateCode'] = $this->smsTemplateCode;
        }
        if (null !== $this->smsTemplateParam) {
            $res['SmsTemplateParam'] = $this->smsTemplateParam;
        }
        if (null !== $this->strategyContent) {
            $res['StrategyContent'] = $this->strategyContent;
        }
        if (null !== $this->strategyType) {
            $res['StrategyType'] = $this->strategyType;
        }
        if (null !== $this->targetMsgkey) {
            $res['TargetMsgkey'] = $this->targetMsgkey;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->templateKeyValue) {
            $res['TemplateKeyValue'] = $this->templateKeyValue;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->thirdChannelCategory) {
            $res['ThirdChannelCategory'] = $this->thirdChannelCategory;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityContentState'])) {
            $model->activityContentState = $map['ActivityContentState'];
        }
        if (isset($map['ActivityEvent'])) {
            $model->activityEvent = $map['ActivityEvent'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['DeliveryType'])) {
            $model->deliveryType = $map['DeliveryType'];
        }
        if (isset($map['DismissalDate'])) {
            $model->dismissalDate = $map['DismissalDate'];
        }
        if (isset($map['ExpiredSeconds'])) {
            $model->expiredSeconds = $map['ExpiredSeconds'];
        }
        if (isset($map['ExtendedParams'])) {
            $model->extendedParams = $map['ExtendedParams'];
        }
        if (isset($map['MiChannelId'])) {
            $model->miChannelId = $map['MiChannelId'];
        }
        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }
        if (isset($map['PushAction'])) {
            $model->pushAction = $map['PushAction'];
        }
        if (isset($map['Silent'])) {
            $model->silent = $map['Silent'];
        }
        if (isset($map['SmsSignName'])) {
            $model->smsSignName = $map['SmsSignName'];
        }
        if (isset($map['SmsStrategy'])) {
            $model->smsStrategy = $map['SmsStrategy'];
        }
        if (isset($map['SmsTemplateCode'])) {
            $model->smsTemplateCode = $map['SmsTemplateCode'];
        }
        if (isset($map['SmsTemplateParam'])) {
            $model->smsTemplateParam = $map['SmsTemplateParam'];
        }
        if (isset($map['StrategyContent'])) {
            $model->strategyContent = $map['StrategyContent'];
        }
        if (isset($map['StrategyType'])) {
            $model->strategyType = $map['StrategyType'];
        }
        if (isset($map['TargetMsgkey'])) {
            $model->targetMsgkey = $map['TargetMsgkey'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TemplateKeyValue'])) {
            $model->templateKeyValue = $map['TemplateKeyValue'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['ThirdChannelCategory'])) {
            $model->thirdChannelCategory = $map['ThirdChannelCategory'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
