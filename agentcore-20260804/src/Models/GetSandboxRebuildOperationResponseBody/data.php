<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetSandboxRebuildOperationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetSandboxRebuildOperationResponseBody\data\error;

class data extends Model
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
    public $sandboxId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'error' => 'error',
        'operationId' => 'operationId',
        'sandboxId' => 'sandboxId',
        'status' => 'status',
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

        if (null !== $this->sandboxId) {
            $res['sandboxId'] = $this->sandboxId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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

        if (isset($map['sandboxId'])) {
            $model->sandboxId = $map['sandboxId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
