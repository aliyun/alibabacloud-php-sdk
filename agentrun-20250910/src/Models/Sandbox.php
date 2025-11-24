<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class Sandbox extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $endedAt;

    /**
     * @var string
     */
    public $lastUpdatedAt;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $sandboxArn;

    /**
     * @var string
     */
    public $sandboxId;

    /**
     * @var int
     */
    public $sandboxIdleTTLInSeconds;

    /**
     * @var int
     */
    public $sandboxIdleTimeoutSeconds;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'createdAt' => 'createdAt',
        'endedAt' => 'endedAt',
        'lastUpdatedAt' => 'lastUpdatedAt',
        'metadata' => 'metadata',
        'sandboxArn' => 'sandboxArn',
        'sandboxId' => 'sandboxId',
        'sandboxIdleTTLInSeconds' => 'sandboxIdleTTLInSeconds',
        'sandboxIdleTimeoutSeconds' => 'sandboxIdleTimeoutSeconds',
        'status' => 'status',
        'templateId' => 'templateId',
        'templateName' => 'templateName',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->endedAt) {
            $res['endedAt'] = $this->endedAt;
        }

        if (null !== $this->lastUpdatedAt) {
            $res['lastUpdatedAt'] = $this->lastUpdatedAt;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sandboxArn) {
            $res['sandboxArn'] = $this->sandboxArn;
        }

        if (null !== $this->sandboxId) {
            $res['sandboxId'] = $this->sandboxId;
        }

        if (null !== $this->sandboxIdleTTLInSeconds) {
            $res['sandboxIdleTTLInSeconds'] = $this->sandboxIdleTTLInSeconds;
        }

        if (null !== $this->sandboxIdleTimeoutSeconds) {
            $res['sandboxIdleTimeoutSeconds'] = $this->sandboxIdleTimeoutSeconds;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
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

        if (isset($map['endedAt'])) {
            $model->endedAt = $map['endedAt'];
        }

        if (isset($map['lastUpdatedAt'])) {
            $model->lastUpdatedAt = $map['lastUpdatedAt'];
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['sandboxArn'])) {
            $model->sandboxArn = $map['sandboxArn'];
        }

        if (isset($map['sandboxId'])) {
            $model->sandboxId = $map['sandboxId'];
        }

        if (isset($map['sandboxIdleTTLInSeconds'])) {
            $model->sandboxIdleTTLInSeconds = $map['sandboxIdleTTLInSeconds'];
        }

        if (isset($map['sandboxIdleTimeoutSeconds'])) {
            $model->sandboxIdleTimeoutSeconds = $map['sandboxIdleTimeoutSeconds'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        return $model;
    }
}
