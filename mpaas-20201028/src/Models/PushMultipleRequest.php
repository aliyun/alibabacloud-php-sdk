<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\PushMultipleRequest\targetMsg;

class PushMultipleRequest extends Model
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
    public $strategyContent;

    /**
     * @var int
     */
    public $strategyType;

    /**
     * @var targetMsg[]
     */
    public $targetMsg;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var mixed[]
     */
    public $thirdChannelCategory;

    /**
     * @var mixed
     */
    public $transparentMessagePayload;

    /**
     * @var string
     */
    public $transparentMessageUrgency;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'activityContentState' => 'ActivityContentState',
        'activityEvent' => 'ActivityEvent',
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'classification' => 'Classification',
        'deliveryType' => 'DeliveryType',
        'dismissalDate' => 'DismissalDate',
        'expiredSeconds' => 'ExpiredSeconds',
        'extendedParams' => 'ExtendedParams',
        'miChannelId' => 'MiChannelId',
        'notifyType' => 'NotifyType',
        'pushAction' => 'PushAction',
        'silent' => 'Silent',
        'strategyContent' => 'StrategyContent',
        'strategyType' => 'StrategyType',
        'targetMsg' => 'TargetMsg',
        'taskName' => 'TaskName',
        'templateName' => 'TemplateName',
        'tenantId' => 'TenantId',
        'thirdChannelCategory' => 'ThirdChannelCategory',
        'transparentMessagePayload' => 'TransparentMessagePayload',
        'transparentMessageUrgency' => 'TransparentMessageUrgency',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->targetMsg)) {
            Model::validateArray($this->targetMsg);
        }
        if (\is_array($this->thirdChannelCategory)) {
            Model::validateArray($this->thirdChannelCategory);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->strategyContent) {
            $res['StrategyContent'] = $this->strategyContent;
        }

        if (null !== $this->strategyType) {
            $res['StrategyType'] = $this->strategyType;
        }

        if (null !== $this->targetMsg) {
            if (\is_array($this->targetMsg)) {
                $res['TargetMsg'] = [];
                $n1 = 0;
                foreach ($this->targetMsg as $item1) {
                    $res['TargetMsg'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->thirdChannelCategory) {
            if (\is_array($this->thirdChannelCategory)) {
                $res['ThirdChannelCategory'] = [];
                foreach ($this->thirdChannelCategory as $key1 => $value1) {
                    $res['ThirdChannelCategory'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->transparentMessagePayload) {
            $res['TransparentMessagePayload'] = $this->transparentMessagePayload;
        }

        if (null !== $this->transparentMessageUrgency) {
            $res['TransparentMessageUrgency'] = $this->transparentMessageUrgency;
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

        if (isset($map['StrategyContent'])) {
            $model->strategyContent = $map['StrategyContent'];
        }

        if (isset($map['StrategyType'])) {
            $model->strategyType = $map['StrategyType'];
        }

        if (isset($map['TargetMsg'])) {
            if (!empty($map['TargetMsg'])) {
                $model->targetMsg = [];
                $n1 = 0;
                foreach ($map['TargetMsg'] as $item1) {
                    $model->targetMsg[$n1] = targetMsg::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['ThirdChannelCategory'])) {
            if (!empty($map['ThirdChannelCategory'])) {
                $model->thirdChannelCategory = [];
                foreach ($map['ThirdChannelCategory'] as $key1 => $value1) {
                    $model->thirdChannelCategory[$key1] = $value1;
                }
            }
        }

        if (isset($map['TransparentMessagePayload'])) {
            $model->transparentMessagePayload = $map['TransparentMessagePayload'];
        }

        if (isset($map['TransparentMessageUrgency'])) {
            $model->transparentMessageUrgency = $map['TransparentMessageUrgency'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
