<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\TokenUsageDetailDTO\bizObjects;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\TokenUsageDetailDTO\scopeConfig;

class TokenUsageDetailDTO extends Model
{
    /**
     * @var bizObjects[]
     */
    public $bizObjects;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $occurredAt;

    /**
     * @var scopeConfig
     */
    public $scopeConfig;

    /**
     * @var string
     */
    public $scopeType;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalJobs;

    /**
     * @var int
     */
    public $totalTokens;

    /**
     * @var string
     */
    public $triggerSource;

    /**
     * @var string
     */
    public $usageType;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'bizObjects' => 'BizObjects',
        'namespace' => 'Namespace',
        'occurredAt' => 'OccurredAt',
        'scopeConfig' => 'ScopeConfig',
        'scopeType' => 'ScopeType',
        'sessionId' => 'SessionId',
        'status' => 'Status',
        'totalJobs' => 'TotalJobs',
        'totalTokens' => 'TotalTokens',
        'triggerSource' => 'TriggerSource',
        'usageType' => 'UsageType',
        'workspace' => 'Workspace',
    ];

    public function validate()
    {
        if (\is_array($this->bizObjects)) {
            Model::validateArray($this->bizObjects);
        }
        if (null !== $this->scopeConfig) {
            $this->scopeConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizObjects) {
            if (\is_array($this->bizObjects)) {
                $res['BizObjects'] = [];
                $n1 = 0;
                foreach ($this->bizObjects as $item1) {
                    $res['BizObjects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->occurredAt) {
            $res['OccurredAt'] = $this->occurredAt;
        }

        if (null !== $this->scopeConfig) {
            $res['ScopeConfig'] = null !== $this->scopeConfig ? $this->scopeConfig->toArray($noStream) : $this->scopeConfig;
        }

        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalJobs) {
            $res['TotalJobs'] = $this->totalJobs;
        }

        if (null !== $this->totalTokens) {
            $res['TotalTokens'] = $this->totalTokens;
        }

        if (null !== $this->triggerSource) {
            $res['TriggerSource'] = $this->triggerSource;
        }

        if (null !== $this->usageType) {
            $res['UsageType'] = $this->usageType;
        }

        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
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
        if (isset($map['BizObjects'])) {
            if (!empty($map['BizObjects'])) {
                $model->bizObjects = [];
                $n1 = 0;
                foreach ($map['BizObjects'] as $item1) {
                    $model->bizObjects[$n1] = bizObjects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['OccurredAt'])) {
            $model->occurredAt = $map['OccurredAt'];
        }

        if (isset($map['ScopeConfig'])) {
            $model->scopeConfig = scopeConfig::fromMap($map['ScopeConfig']);
        }

        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalJobs'])) {
            $model->totalJobs = $map['TotalJobs'];
        }

        if (isset($map['TotalTokens'])) {
            $model->totalTokens = $map['TotalTokens'];
        }

        if (isset($map['TriggerSource'])) {
            $model->triggerSource = $map['TriggerSource'];
        }

        if (isset($map['UsageType'])) {
            $model->usageType = $map['UsageType'];
        }

        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
