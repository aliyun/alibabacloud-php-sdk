<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreatePermissionRulesRequest\body;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
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
    public $principalId;

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
    public $targetScope;

    /**
     * @var string[]
     */
    public $targets;
    protected $_name = [
        'effect' => 'effect',
        'enforcementMode' => 'enforcementMode',
        'principalId' => 'principalId',
        'principalType' => 'principalType',
        'resourceId' => 'resourceId',
        'resourceType' => 'resourceType',
        'source' => 'source',
        'targetScope' => 'targetScope',
        'targets' => 'targets',
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
        if (null !== $this->effect) {
            $res['effect'] = $this->effect;
        }

        if (null !== $this->enforcementMode) {
            $res['enforcementMode'] = $this->enforcementMode;
        }

        if (null !== $this->principalId) {
            $res['principalId'] = $this->principalId;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['effect'])) {
            $model->effect = $map['effect'];
        }

        if (isset($map['enforcementMode'])) {
            $model->enforcementMode = $map['enforcementMode'];
        }

        if (isset($map['principalId'])) {
            $model->principalId = $map['principalId'];
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

        return $model;
    }
}
