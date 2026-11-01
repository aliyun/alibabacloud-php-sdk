<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListPermissionRulesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $effect;

    /**
     * @var string
     */
    public $enforcementMode;

    /**
     * @var string
     */
    public $permissionRuleId;

    /**
     * @var string
     */
    public $principalId;

    /**
     * @var string
     */
    public $principalName;

    /**
     * @var string
     */
    public $principalType;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceDetail;

    /**
     * @var string
     */
    public $targetScope;

    /**
     * @var string[]
     */
    public $targets;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'effect' => 'effect',
        'enforcementMode' => 'enforcementMode',
        'permissionRuleId' => 'permissionRuleId',
        'principalId' => 'principalId',
        'principalName' => 'principalName',
        'principalType' => 'principalType',
        'resourceId' => 'resourceId',
        'resourceType' => 'resourceType',
        'source' => 'source',
        'sourceDetail' => 'sourceDetail',
        'targetScope' => 'targetScope',
        'targets' => 'targets',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (\is_array($this->targets)) {
            Model::validateArray($this->targets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->effect) {
            $res['effect'] = $this->effect;
        }

        if (null !== $this->enforcementMode) {
            $res['enforcementMode'] = $this->enforcementMode;
        }

        if (null !== $this->permissionRuleId) {
            $res['permissionRuleId'] = $this->permissionRuleId;
        }

        if (null !== $this->principalId) {
            $res['principalId'] = $this->principalId;
        }

        if (null !== $this->principalName) {
            $res['principalName'] = $this->principalName;
        }

        if (null !== $this->principalType) {
            $res['principalType'] = $this->principalType;
        }

        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->sourceDetail) {
            $res['sourceDetail'] = $this->sourceDetail;
        }

        if (null !== $this->targetScope) {
            $res['targetScope'] = $this->targetScope;
        }

        if (null !== $this->targets) {
            if (\is_array($this->targets)) {
                $res['targets'] = [];
                $n1 = 0;
                foreach ($this->targets as $item1) {
                    $res['targets'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['effect'])) {
            $model->effect = $map['effect'];
        }

        if (isset($map['enforcementMode'])) {
            $model->enforcementMode = $map['enforcementMode'];
        }

        if (isset($map['permissionRuleId'])) {
            $model->permissionRuleId = $map['permissionRuleId'];
        }

        if (isset($map['principalId'])) {
            $model->principalId = $map['principalId'];
        }

        if (isset($map['principalName'])) {
            $model->principalName = $map['principalName'];
        }

        if (isset($map['principalType'])) {
            $model->principalType = $map['principalType'];
        }

        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['sourceDetail'])) {
            $model->sourceDetail = $map['sourceDetail'];
        }

        if (isset($map['targetScope'])) {
            $model->targetScope = $map['targetScope'];
        }

        if (isset($map['targets'])) {
            if (!empty($map['targets'])) {
                $model->targets = [];
                $n1 = 0;
                foreach ($map['targets'] as $item1) {
                    $model->targets[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
