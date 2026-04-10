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
    public $id;

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
    public $memoryUserId;

    /**
     * @var string
     */
    public $metadata;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'id' => 'Id',
        'memory' => 'Memory',
        'memoryAgentId' => 'MemoryAgentId',
        'memoryUserId' => 'MemoryUserId',
        'metadata' => 'Metadata',
        'score' => 'Score',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->memoryAgentId) {
            $res['MemoryAgentId'] = $this->memoryAgentId;
        }

        if (null !== $this->memoryUserId) {
            $res['MemoryUserId'] = $this->memoryUserId;
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['MemoryAgentId'])) {
            $model->memoryAgentId = $map['MemoryAgentId'];
        }

        if (isset($map['MemoryUserId'])) {
            $model->memoryUserId = $map['MemoryUserId'];
        }

        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
