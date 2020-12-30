<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackRequest\parameters;
use AlibabaCloud\Tea\Model;

class CreateStackRequest extends Model
{
    /**
     * @var bool
     */
    public $disableRollback;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var string
     */
    public $stackPolicyURL;

    /**
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @var string
     */
    public $stackPolicyBody;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $orderSource;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $templateURL;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $createOption;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var string[]
     */
    public $notificationURLs;
    protected $_name = [
        'disableRollback'    => 'DisableRollback',
        'channelId'          => 'ChannelId',
        'templateBody'       => 'TemplateBody',
        'stackPolicyURL'     => 'StackPolicyURL',
        'timeoutInMinutes'   => 'TimeoutInMinutes',
        'stackPolicyBody'    => 'StackPolicyBody',
        'stackName'          => 'StackName',
        'regionId'           => 'RegionId',
        'activityId'         => 'ActivityId',
        'orderSource'        => 'OrderSource',
        'clientToken'        => 'ClientToken',
        'templateURL'        => 'TemplateURL',
        'ramRoleName'        => 'RamRoleName',
        'deletionProtection' => 'DeletionProtection',
        'createOption'       => 'CreateOption',
        'templateId'         => 'TemplateId',
        'templateVersion'    => 'TemplateVersion',
        'parameters'         => 'Parameters',
        'notificationURLs'   => 'NotificationURLs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->stackPolicyURL) {
            $res['StackPolicyURL'] = $this->stackPolicyURL;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }
        if (null !== $this->stackPolicyBody) {
            $res['StackPolicyBody'] = $this->stackPolicyBody;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->orderSource) {
            $res['OrderSource'] = $this->orderSource;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->createOption) {
            $res['CreateOption'] = $this->createOption;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->notificationURLs) {
            $res['NotificationURLs'] = $this->notificationURLs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['StackPolicyURL'])) {
            $model->stackPolicyURL = $map['StackPolicyURL'];
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }
        if (isset($map['StackPolicyBody'])) {
            $model->stackPolicyBody = $map['StackPolicyBody'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['OrderSource'])) {
            $model->orderSource = $map['OrderSource'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['CreateOption'])) {
            $model->createOption = $map['CreateOption'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NotificationURLs'])) {
            if (!empty($map['NotificationURLs'])) {
                $model->notificationURLs = $map['NotificationURLs'];
            }
        }

        return $model;
    }
}
