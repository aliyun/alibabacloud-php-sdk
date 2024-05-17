<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class PushSimpleRequest extends Model
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
     * @description This parameter is required.
     *
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
     * @description This parameter is required.
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $deliveryType;

    /**
     * @var int
     */
    public $dismissalDate;

    /**
     * @description This parameter is required.
     *
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
    public $iconUrls;

    /**
     * @var string
     */
    public $imageUrls;

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
    public $pushStyle;

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
     * @description This parameter is required.
     *
     * @var string
     */
    public $targetMsgkey;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var mixed[]
     */
    public $thirdChannelCategory;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $uri;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'activityContentState' => 'ActivityContentState',
        'activityEvent'        => 'ActivityEvent',
        'appId'                => 'AppId',
        'channelId'            => 'ChannelId',
        'classification'       => 'Classification',
        'content'              => 'Content',
        'deliveryType'         => 'DeliveryType',
        'dismissalDate'        => 'DismissalDate',
        'expiredSeconds'       => 'ExpiredSeconds',
        'extendedParams'       => 'ExtendedParams',
        'iconUrls'             => 'IconUrls',
        'imageUrls'            => 'ImageUrls',
        'miChannelId'          => 'MiChannelId',
        'notifyType'           => 'NotifyType',
        'pushAction'           => 'PushAction',
        'pushStyle'            => 'PushStyle',
        'silent'               => 'Silent',
        'smsSignName'          => 'SmsSignName',
        'smsStrategy'          => 'SmsStrategy',
        'smsTemplateCode'      => 'SmsTemplateCode',
        'smsTemplateParam'     => 'SmsTemplateParam',
        'strategyContent'      => 'StrategyContent',
        'strategyType'         => 'StrategyType',
        'targetMsgkey'         => 'TargetMsgkey',
        'taskName'             => 'TaskName',
        'thirdChannelCategory' => 'ThirdChannelCategory',
        'title'                => 'Title',
        'uri'                  => 'Uri',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
        if (null !== $this->iconUrls) {
            $res['IconUrls'] = $this->iconUrls;
        }
        if (null !== $this->imageUrls) {
            $res['ImageUrls'] = $this->imageUrls;
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
        if (null !== $this->pushStyle) {
            $res['PushStyle'] = $this->pushStyle;
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
        if (null !== $this->thirdChannelCategory) {
            $res['ThirdChannelCategory'] = $this->thirdChannelCategory;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushSimpleRequest
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
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
        if (isset($map['IconUrls'])) {
            $model->iconUrls = $map['IconUrls'];
        }
        if (isset($map['ImageUrls'])) {
            $model->imageUrls = $map['ImageUrls'];
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
        if (isset($map['PushStyle'])) {
            $model->pushStyle = $map['PushStyle'];
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
        if (isset($map['ThirdChannelCategory'])) {
            $model->thirdChannelCategory = $map['ThirdChannelCategory'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
