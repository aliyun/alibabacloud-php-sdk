<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAgentIMChannelResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAgentIMChannelResponseBody\data\channelConfig;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateAgentIMChannelResponseBody\data\credentialSummary;

class data extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var channelConfig
     */
    public $channelConfig;

    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var credentialSummary
     */
    public $credentialSummary;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $endpointUrl;

    /**
     * @var string
     */
    public $imChannelId;

    /**
     * @var string
     */
    public $serviceEndpointId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'agentId' => 'agentId',
        'channelConfig' => 'channelConfig',
        'channelType' => 'channelType',
        'createTime' => 'createTime',
        'credentialSummary' => 'credentialSummary',
        'enabled' => 'enabled',
        'endpointUrl' => 'endpointUrl',
        'imChannelId' => 'imChannelId',
        'serviceEndpointId' => 'serviceEndpointId',
        'status' => 'status',
        'statusReason' => 'statusReason',
        'updateTime' => 'updateTime',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (null !== $this->channelConfig) {
            $this->channelConfig->validate();
        }
        if (null !== $this->credentialSummary) {
            $this->credentialSummary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->channelConfig) {
            $res['channelConfig'] = null !== $this->channelConfig ? $this->channelConfig->toArray($noStream) : $this->channelConfig;
        }

        if (null !== $this->channelType) {
            $res['channelType'] = $this->channelType;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->credentialSummary) {
            $res['credentialSummary'] = null !== $this->credentialSummary ? $this->credentialSummary->toArray($noStream) : $this->credentialSummary;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->endpointUrl) {
            $res['endpointUrl'] = $this->endpointUrl;
        }

        if (null !== $this->imChannelId) {
            $res['imChannelId'] = $this->imChannelId;
        }

        if (null !== $this->serviceEndpointId) {
            $res['serviceEndpointId'] = $this->serviceEndpointId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusReason) {
            $res['statusReason'] = $this->statusReason;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['channelConfig'])) {
            $model->channelConfig = channelConfig::fromMap($map['channelConfig']);
        }

        if (isset($map['channelType'])) {
            $model->channelType = $map['channelType'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['credentialSummary'])) {
            $model->credentialSummary = credentialSummary::fromMap($map['credentialSummary']);
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['endpointUrl'])) {
            $model->endpointUrl = $map['endpointUrl'];
        }

        if (isset($map['imChannelId'])) {
            $model->imChannelId = $map['imChannelId'];
        }

        if (isset($map['serviceEndpointId'])) {
            $model->serviceEndpointId = $map['serviceEndpointId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusReason'])) {
            $model->statusReason = $map['statusReason'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
