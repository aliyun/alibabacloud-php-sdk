<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateChunksResponseBody\data\chunkUpdate;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var int
     */
    public $chunkSeq;

    /**
     * @var string
     */
    public $failureReason;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'chunkSeq' => 'chunkSeq',
        'failureReason' => 'failureReason',
        'status' => 'status',
        'success' => 'success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkSeq) {
            $res['chunkSeq'] = $this->chunkSeq;
        }

        if (null !== $this->failureReason) {
            $res['failureReason'] = $this->failureReason;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['chunkSeq'])) {
            $model->chunkSeq = $map['chunkSeq'];
        }

        if (isset($map['failureReason'])) {
            $model->failureReason = $map['failureReason'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
