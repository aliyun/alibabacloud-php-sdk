<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;

class PushBroadcastShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $androidChannel;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $bindEndTime;

    /**
     * @var int
     */
    public $bindPeriod;

    /**
     * @var int
     */
    public $bindStartTime;

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
    public $msgkey;

    /**
     * @var string
     */
    public $notifyLevelShrink;

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
    public $pushStatus;

    /**
     * @var int
     */
    public $silent;

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
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $thirdChannelCategoryShrink;

    /**
     * @var int
     */
    public $timeMode;

    /**
     * @var mixed
     */
    public $transparentMessagePayload;

    /**
     * @var string
     */
    public $transparentMessageUrgency;

    /**
     * @var int
     */
    public $unBindEndTime;

    /**
     * @var int
     */
    public $unBindPeriod;

    /**
     * @var int
     */
    public $unBindStartTime;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'androidChannel' => 'AndroidChannel',
        'appId' => 'AppId',
        'bindEndTime' => 'BindEndTime',
        'bindPeriod' => 'BindPeriod',
        'bindStartTime' => 'BindStartTime',
        'channelId' => 'ChannelId',
        'classification' => 'Classification',
        'deliveryType' => 'DeliveryType',
        'expiredSeconds' => 'ExpiredSeconds',
        'extendedParams' => 'ExtendedParams',
        'miChannelId' => 'MiChannelId',
        'msgkey' => 'Msgkey',
        'notifyLevelShrink' => 'NotifyLevel',
        'notifyType' => 'NotifyType',
        'pushAction' => 'PushAction',
        'pushStatus' => 'PushStatus',
        'silent' => 'Silent',
        'strategyContent' => 'StrategyContent',
        'strategyType' => 'StrategyType',
        'taskName' => 'TaskName',
        'templateKeyValue' => 'TemplateKeyValue',
        'templateName' => 'TemplateName',
        'tenantId' => 'TenantId',
        'thirdChannelCategoryShrink' => 'ThirdChannelCategory',
        'timeMode' => 'TimeMode',
        'transparentMessagePayload' => 'TransparentMessagePayload',
        'transparentMessageUrgency' => 'TransparentMessageUrgency',
        'unBindEndTime' => 'UnBindEndTime',
        'unBindPeriod' => 'UnBindPeriod',
        'unBindStartTime' => 'UnBindStartTime',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->androidChannel) {
            $res['AndroidChannel'] = $this->androidChannel;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->bindEndTime) {
            $res['BindEndTime'] = $this->bindEndTime;
        }

        if (null !== $this->bindPeriod) {
            $res['BindPeriod'] = $this->bindPeriod;
        }

        if (null !== $this->bindStartTime) {
            $res['BindStartTime'] = $this->bindStartTime;
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

        if (null !== $this->expiredSeconds) {
            $res['ExpiredSeconds'] = $this->expiredSeconds;
        }

        if (null !== $this->extendedParams) {
            $res['ExtendedParams'] = $this->extendedParams;
        }

        if (null !== $this->miChannelId) {
            $res['MiChannelId'] = $this->miChannelId;
        }

        if (null !== $this->msgkey) {
            $res['Msgkey'] = $this->msgkey;
        }

        if (null !== $this->notifyLevelShrink) {
            $res['NotifyLevel'] = $this->notifyLevelShrink;
        }

        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
        }

        if (null !== $this->pushAction) {
            $res['PushAction'] = $this->pushAction;
        }

        if (null !== $this->pushStatus) {
            $res['PushStatus'] = $this->pushStatus;
        }

        if (null !== $this->silent) {
            $res['Silent'] = $this->silent;
        }

        if (null !== $this->strategyContent) {
            $res['StrategyContent'] = $this->strategyContent;
        }

        if (null !== $this->strategyType) {
            $res['StrategyType'] = $this->strategyType;
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

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->thirdChannelCategoryShrink) {
            $res['ThirdChannelCategory'] = $this->thirdChannelCategoryShrink;
        }

        if (null !== $this->timeMode) {
            $res['TimeMode'] = $this->timeMode;
        }

        if (null !== $this->transparentMessagePayload) {
            $res['TransparentMessagePayload'] = $this->transparentMessagePayload;
        }

        if (null !== $this->transparentMessageUrgency) {
            $res['TransparentMessageUrgency'] = $this->transparentMessageUrgency;
        }

        if (null !== $this->unBindEndTime) {
            $res['UnBindEndTime'] = $this->unBindEndTime;
        }

        if (null !== $this->unBindPeriod) {
            $res['UnBindPeriod'] = $this->unBindPeriod;
        }

        if (null !== $this->unBindStartTime) {
            $res['UnBindStartTime'] = $this->unBindStartTime;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AndroidChannel'])) {
            $model->androidChannel = $map['AndroidChannel'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['BindEndTime'])) {
            $model->bindEndTime = $map['BindEndTime'];
        }

        if (isset($map['BindPeriod'])) {
            $model->bindPeriod = $map['BindPeriod'];
        }

        if (isset($map['BindStartTime'])) {
            $model->bindStartTime = $map['BindStartTime'];
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

        if (isset($map['ExpiredSeconds'])) {
            $model->expiredSeconds = $map['ExpiredSeconds'];
        }

        if (isset($map['ExtendedParams'])) {
            $model->extendedParams = $map['ExtendedParams'];
        }

        if (isset($map['MiChannelId'])) {
            $model->miChannelId = $map['MiChannelId'];
        }

        if (isset($map['Msgkey'])) {
            $model->msgkey = $map['Msgkey'];
        }

        if (isset($map['NotifyLevel'])) {
            $model->notifyLevelShrink = $map['NotifyLevel'];
        }

        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }

        if (isset($map['PushAction'])) {
            $model->pushAction = $map['PushAction'];
        }

        if (isset($map['PushStatus'])) {
            $model->pushStatus = $map['PushStatus'];
        }

        if (isset($map['Silent'])) {
            $model->silent = $map['Silent'];
        }

        if (isset($map['StrategyContent'])) {
            $model->strategyContent = $map['StrategyContent'];
        }

        if (isset($map['StrategyType'])) {
            $model->strategyType = $map['StrategyType'];
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

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['ThirdChannelCategory'])) {
            $model->thirdChannelCategoryShrink = $map['ThirdChannelCategory'];
        }

        if (isset($map['TimeMode'])) {
            $model->timeMode = $map['TimeMode'];
        }

        if (isset($map['TransparentMessagePayload'])) {
            $model->transparentMessagePayload = $map['TransparentMessagePayload'];
        }

        if (isset($map['TransparentMessageUrgency'])) {
            $model->transparentMessageUrgency = $map['TransparentMessageUrgency'];
        }

        if (isset($map['UnBindEndTime'])) {
            $model->unBindEndTime = $map['UnBindEndTime'];
        }

        if (isset($map['UnBindPeriod'])) {
            $model->unBindPeriod = $map['UnBindPeriod'];
        }

        if (isset($map['UnBindStartTime'])) {
            $model->unBindStartTime = $map['UnBindStartTime'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
