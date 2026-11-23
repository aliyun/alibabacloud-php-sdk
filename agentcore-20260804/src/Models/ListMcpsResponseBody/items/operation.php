<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpsResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpsResponseBody\items\operation\error;

class operation extends Model
{
    /**
     * @var error
     */
    public $error;

    /**
     * @var string
     */
    public $operationId;

    /**
     * @var string
     */
    public $stage;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'error' => 'error',
        'operationId' => 'operationId',
        'stage' => 'stage',
        'status' => 'status',
        'type' => 'type',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (null !== $this->error) {
            $this->error->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
        }

        if (null !== $this->operationId) {
            $res['operationId'] = $this->operationId;
        }

        if (null !== $this->stage) {
            $res['stage'] = $this->stage;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['error'])) {
            $model->error = error::fromMap($map['error']);
        }

        if (isset($map['operationId'])) {
            $model->operationId = $map['operationId'];
        }

        if (isset($map['stage'])) {
            $model->stage = $map['stage'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
