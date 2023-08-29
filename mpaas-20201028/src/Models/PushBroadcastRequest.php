<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class PushBroadcastRequest extends Model
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
    public $bindPeriod;

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
     * @var mixed[]
     */
    public $thirdChannelCategory;

    /**
     * @var int
     */
    public $unBindPeriod;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'androidChannel'       => 'AndroidChannel',
        'appId'                => 'AppId',
        'bindPeriod'           => 'BindPeriod',
        'channelId'            => 'ChannelId',
        'classification'       => 'Classification',
        'deliveryType'         => 'DeliveryType',
        'expiredSeconds'       => 'ExpiredSeconds',
        'extendedParams'       => 'ExtendedParams',
        'miChannelId'          => 'MiChannelId',
        'msgkey'               => 'Msgkey',
        'notifyType'           => 'NotifyType',
        'pushAction'           => 'PushAction',
        'pushStatus'           => 'PushStatus',
        'silent'               => 'Silent',
        'strategyContent'      => 'StrategyContent',
        'strategyType'         => 'StrategyType',
        'taskName'             => 'TaskName',
        'templateKeyValue'     => 'TemplateKeyValue',
        'templateName'         => 'TemplateName',
        'thirdChannelCategory' => 'ThirdChannelCategory',
        'unBindPeriod'         => 'UnBindPeriod',
        'workspaceId'          => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidChannel) {
            $res['AndroidChannel'] = $this->androidChannel;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->bindPeriod) {
            $res['BindPeriod'] = $this->bindPeriod;
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
        if (null !== $this->thirdChannelCategory) {
            $res['ThirdChannelCategory'] = $this->thirdChannelCategory;
        }
        if (null !== $this->unBindPeriod) {
            $res['UnBindPeriod'] = $this->unBindPeriod;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushBroadcastRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidChannel'])) {
            $model->androidChannel = $map['AndroidChannel'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BindPeriod'])) {
            $model->bindPeriod = $map['BindPeriod'];
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
        if (isset($map['ThirdChannelCategory'])) {
            $model->thirdChannelCategory = $map['ThirdChannelCategory'];
        }
        if (isset($map['UnBindPeriod'])) {
            $model->unBindPeriod = $map['UnBindPeriod'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
