<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801\Models\GetRunResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\GetRunResponseBody\data\outcome;

class data extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var outcome
     */
    public $outcome;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'outcome' => 'outcome',
        'runId' => 'runId',
        'sessionId' => 'sessionId',
        'status' => 'status',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (null !== $this->outcome) {
            $this->outcome->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->outcome) {
            $res['outcome'] = null !== $this->outcome ? $this->outcome->toArray($noStream) : $this->outcome;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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

        if (isset($map['outcome'])) {
            $model->outcome = outcome::fromMap($map['outcome']);
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
