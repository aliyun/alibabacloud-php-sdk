<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class IMBotInfo extends Model
{
    /**
     * @var string
     */
    public $agentRuntimeId;

    /**
     * @var string
     */
    public $botBizId;

    /**
     * @var string
     */
    public $botBizType;

    /**
     * @var string
     */
    public $botMode;

    /**
     * @var string
     */
    public $botName;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var int
     */
    public $currentInstances;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $imChannelServerResourceName;

    /**
     * @var string
     */
    public $lastMessageTime;

    /**
     * @var IMBotMetadata
     */
    public $metadata;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'agentRuntimeId' => 'agentRuntimeId',
        'botBizId' => 'botBizId',
        'botBizType' => 'botBizType',
        'botMode' => 'botMode',
        'botName' => 'botName',
        'createdAt' => 'createdAt',
        'currentInstances' => 'currentInstances',
        'description' => 'description',
        'id' => 'id',
        'imChannelServerResourceName' => 'imChannelServerResourceName',
        'lastMessageTime' => 'lastMessageTime',
        'metadata' => 'metadata',
        'status' => 'status',
        'tenantId' => 'tenantId',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (null !== $this->metadata) {
            $this->metadata->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentRuntimeId) {
            $res['agentRuntimeId'] = $this->agentRuntimeId;
        }

        if (null !== $this->botBizId) {
            $res['botBizId'] = $this->botBizId;
        }

        if (null !== $this->botBizType) {
            $res['botBizType'] = $this->botBizType;
        }

        if (null !== $this->botMode) {
            $res['botMode'] = $this->botMode;
        }

        if (null !== $this->botName) {
            $res['botName'] = $this->botName;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->currentInstances) {
            $res['currentInstances'] = $this->currentInstances;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->imChannelServerResourceName) {
            $res['imChannelServerResourceName'] = $this->imChannelServerResourceName;
        }

        if (null !== $this->lastMessageTime) {
            $res['lastMessageTime'] = $this->lastMessageTime;
        }

        if (null !== $this->metadata) {
            $res['metadata'] = null !== $this->metadata ? $this->metadata->toArray($noStream) : $this->metadata;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['agentRuntimeId'])) {
            $model->agentRuntimeId = $map['agentRuntimeId'];
        }

        if (isset($map['botBizId'])) {
            $model->botBizId = $map['botBizId'];
        }

        if (isset($map['botBizType'])) {
            $model->botBizType = $map['botBizType'];
        }

        if (isset($map['botMode'])) {
            $model->botMode = $map['botMode'];
        }

        if (isset($map['botName'])) {
            $model->botName = $map['botName'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['currentInstances'])) {
            $model->currentInstances = $map['currentInstances'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['imChannelServerResourceName'])) {
            $model->imChannelServerResourceName = $map['imChannelServerResourceName'];
        }

        if (isset($map['lastMessageTime'])) {
            $model->lastMessageTime = $map['lastMessageTime'];
        }

        if (isset($map['metadata'])) {
            $model->metadata = IMBotMetadata::fromMap($map['metadata']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
