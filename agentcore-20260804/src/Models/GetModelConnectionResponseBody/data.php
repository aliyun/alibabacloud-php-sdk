<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetModelConnectionResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $apiKeyCount;

    /**
     * @var string[]
     */
    public $apiKeys;

    /**
     * @var string
     */
    public $connectionId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $credentialConfigured;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $providerType;

    /**
     * @var string
     */
    public $regionId;

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
    public $updatedAt;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'apiKeyCount' => 'apiKeyCount',
        'apiKeys' => 'apiKeys',
        'connectionId' => 'connectionId',
        'createdAt' => 'createdAt',
        'credentialConfigured' => 'credentialConfigured',
        'description' => 'description',
        'endpoint' => 'endpoint',
        'name' => 'name',
        'protocol' => 'protocol',
        'providerType' => 'providerType',
        'regionId' => 'regionId',
        'status' => 'status',
        'statusReason' => 'statusReason',
        'updatedAt' => 'updatedAt',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->apiKeys)) {
            Model::validateArray($this->apiKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyCount) {
            $res['apiKeyCount'] = $this->apiKeyCount;
        }

        if (null !== $this->apiKeys) {
            if (\is_array($this->apiKeys)) {
                $res['apiKeys'] = [];
                $n1 = 0;
                foreach ($this->apiKeys as $item1) {
                    $res['apiKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->connectionId) {
            $res['connectionId'] = $this->connectionId;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->credentialConfigured) {
            $res['credentialConfigured'] = $this->credentialConfigured;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->providerType) {
            $res['providerType'] = $this->providerType;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusReason) {
            $res['statusReason'] = $this->statusReason;
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
        if (isset($map['apiKeyCount'])) {
            $model->apiKeyCount = $map['apiKeyCount'];
        }

        if (isset($map['apiKeys'])) {
            if (!empty($map['apiKeys'])) {
                $model->apiKeys = [];
                $n1 = 0;
                foreach ($map['apiKeys'] as $item1) {
                    $model->apiKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['connectionId'])) {
            $model->connectionId = $map['connectionId'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['credentialConfigured'])) {
            $model->credentialConfigured = $map['credentialConfigured'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['providerType'])) {
            $model->providerType = $map['providerType'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusReason'])) {
            $model->statusReason = $map['statusReason'];
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
