<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\SearchMemoriesResponseBody;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $actorId;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $hash;

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
    public $metadata;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'actorId' => 'actorId',
        'agentId' => 'agentId',
        'createdAt' => 'createdAt',
        'hash' => 'hash',
        'id' => 'id',
        'memory' => 'memory',
        'metadata' => 'metadata',
        'role' => 'role',
        'runId' => 'runId',
        'score' => 'score',
        'updatedAt' => 'updatedAt',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actorId) {
            $res['actorId'] = $this->actorId;
        }

        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->hash) {
            $res['hash'] = $this->hash;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        if (null !== $this->metadata) {
            $res['metadata'] = $this->metadata;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->score) {
            $res['score'] = $this->score;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['actorId'])) {
            $model->actorId = $map['actorId'];
        }

        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['hash'])) {
            $model->hash = $map['hash'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        if (isset($map['metadata'])) {
            $model->metadata = $map['metadata'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['score'])) {
            $model->score = $map['score'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
