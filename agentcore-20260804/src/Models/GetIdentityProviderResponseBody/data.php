<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderResponseBody\data\metadata;

class data extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $eventSubscriptionCallbackUrl;

    /**
     * @var string
     */
    public $identityProviderType;

    /**
     * @var string
     */
    public $loginCallbackUrl;

    /**
     * @var bool
     */
    public $loginEnabled;

    /**
     * @var metadata
     */
    public $metadata;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $syncEnabled;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'createdAt' => 'createdAt',
        'eventSubscriptionCallbackUrl' => 'eventSubscriptionCallbackUrl',
        'identityProviderType' => 'identityProviderType',
        'loginCallbackUrl' => 'loginCallbackUrl',
        'loginEnabled' => 'loginEnabled',
        'metadata' => 'metadata',
        'status' => 'status',
        'syncEnabled' => 'syncEnabled',
        'updatedAt' => 'updatedAt',
        'workspaceId' => 'workspaceId',
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
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->eventSubscriptionCallbackUrl) {
            $res['eventSubscriptionCallbackUrl'] = $this->eventSubscriptionCallbackUrl;
        }

        if (null !== $this->identityProviderType) {
            $res['identityProviderType'] = $this->identityProviderType;
        }

        if (null !== $this->loginCallbackUrl) {
            $res['loginCallbackUrl'] = $this->loginCallbackUrl;
        }

        if (null !== $this->loginEnabled) {
            $res['loginEnabled'] = $this->loginEnabled;
        }

        if (null !== $this->metadata) {
            $res['metadata'] = null !== $this->metadata ? $this->metadata->toArray($noStream) : $this->metadata;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->syncEnabled) {
            $res['syncEnabled'] = $this->syncEnabled;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['eventSubscriptionCallbackUrl'])) {
            $model->eventSubscriptionCallbackUrl = $map['eventSubscriptionCallbackUrl'];
        }

        if (isset($map['identityProviderType'])) {
            $model->identityProviderType = $map['identityProviderType'];
        }

        if (isset($map['loginCallbackUrl'])) {
            $model->loginCallbackUrl = $map['loginCallbackUrl'];
        }

        if (isset($map['loginEnabled'])) {
            $model->loginEnabled = $map['loginEnabled'];
        }

        if (isset($map['metadata'])) {
            $model->metadata = metadata::fromMap($map['metadata']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['syncEnabled'])) {
            $model->syncEnabled = $map['syncEnabled'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
