<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\SearchMemoriesResponseBody;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $id;

    /**
     * @var mixed[]
     */
    public $input;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $memoryAgentId;

    /**
     * @var string
     */
    public $memoryId;

    /**
     * @var string
     */
    public $memoryUserId;

    /**
     * @var string
     */
    public $metadata;

    /**
     * @var string
     */
    public $newMemory;

    /**
     * @var string
     */
    public $oldMemory;

    /**
     * @var string
     */
    public $score;

    /**
     * @var int
     */
    public $updateCount;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'event' => 'Event',
        'id' => 'Id',
        'input' => 'Input',
        'memory' => 'Memory',
        'memoryAgentId' => 'MemoryAgentId',
        'memoryId' => 'MemoryId',
        'memoryUserId' => 'MemoryUserId',
        'metadata' => 'Metadata',
        'newMemory' => 'NewMemory',
        'oldMemory' => 'OldMemory',
        'score' => 'Score',
        'updateCount' => 'UpdateCount',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->input)) {
            Model::validateArray($this->input);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->input) {
            if (\is_array($this->input)) {
                $res['Input'] = [];
                $n1 = 0;
                foreach ($this->input as $item1) {
                    $res['Input'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->memoryAgentId) {
            $res['MemoryAgentId'] = $this->memoryAgentId;
        }

        if (null !== $this->memoryId) {
            $res['MemoryId'] = $this->memoryId;
        }

        if (null !== $this->memoryUserId) {
            $res['MemoryUserId'] = $this->memoryUserId;
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->newMemory) {
            $res['NewMemory'] = $this->newMemory;
        }

        if (null !== $this->oldMemory) {
            $res['OldMemory'] = $this->oldMemory;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->updateCount) {
            $res['UpdateCount'] = $this->updateCount;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Input'])) {
            if (!empty($map['Input'])) {
                $model->input = [];
                $n1 = 0;
                foreach ($map['Input'] as $item1) {
                    $model->input[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['MemoryAgentId'])) {
            $model->memoryAgentId = $map['MemoryAgentId'];
        }

        if (isset($map['MemoryId'])) {
            $model->memoryId = $map['MemoryId'];
        }

        if (isset($map['MemoryUserId'])) {
            $model->memoryUserId = $map['MemoryUserId'];
        }

        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['NewMemory'])) {
            $model->newMemory = $map['NewMemory'];
        }

        if (isset($map['OldMemory'])) {
            $model->oldMemory = $map['OldMemory'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['UpdateCount'])) {
            $model->updateCount = $map['UpdateCount'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
