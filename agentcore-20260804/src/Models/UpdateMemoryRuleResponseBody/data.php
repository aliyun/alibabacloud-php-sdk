<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateMemoryRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateMemoryRuleResponseBody\data\strategy;

class data extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $memoryStoreId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var strategy
     */
    public $strategy;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'description' => 'description',
        'enabled' => 'enabled',
        'memoryStoreId' => 'memoryStoreId',
        'name' => 'name',
        'ruleId' => 'ruleId',
        'strategy' => 'strategy',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (null !== $this->strategy) {
            $this->strategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->memoryStoreId) {
            $res['memoryStoreId'] = $this->memoryStoreId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }

        if (null !== $this->strategy) {
            $res['strategy'] = null !== $this->strategy ? $this->strategy->toArray($noStream) : $this->strategy;
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

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['memoryStoreId'])) {
            $model->memoryStoreId = $map['memoryStoreId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        if (isset($map['strategy'])) {
            $model->strategy = strategy::fromMap($map['strategy']);
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
