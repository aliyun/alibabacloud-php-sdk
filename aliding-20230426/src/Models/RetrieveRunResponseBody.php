<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class RetrieveRunResponseBody extends Model
{
    /**
     * @var int
     */
    public $cancelledAt;
    /**
     * @var int
     */
    public $completedAt;
    /**
     * @var int
     */
    public $createAt;
    /**
     * @var int
     */
    public $expiresAt;
    /**
     * @var int
     */
    public $failedAt;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $lastErrorMsg;
    /**
     * @var mixed[]
     */
    public $metadata;
    /**
     * @var string
     */
    public $object;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $startedAt;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $threadId;
    protected $_name = [
        'cancelledAt'  => 'cancelledAt',
        'completedAt'  => 'completedAt',
        'createAt'     => 'createAt',
        'expiresAt'    => 'expiresAt',
        'failedAt'     => 'failedAt',
        'id'           => 'id',
        'lastErrorMsg' => 'lastErrorMsg',
        'metadata'     => 'metadata',
        'object'       => 'object',
        'requestId'    => 'requestId',
        'startedAt'    => 'startedAt',
        'status'       => 'status',
        'threadId'     => 'threadId',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cancelledAt) {
            $res['cancelledAt'] = $this->cancelledAt;
        }

        if (null !== $this->completedAt) {
            $res['completedAt'] = $this->completedAt;
        }

        if (null !== $this->createAt) {
            $res['createAt'] = $this->createAt;
        }

        if (null !== $this->expiresAt) {
            $res['expiresAt'] = $this->expiresAt;
        }

        if (null !== $this->failedAt) {
            $res['failedAt'] = $this->failedAt;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->lastErrorMsg) {
            $res['lastErrorMsg'] = $this->lastErrorMsg;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->object) {
            $res['object'] = $this->object;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->startedAt) {
            $res['startedAt'] = $this->startedAt;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
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
        if (isset($map['cancelledAt'])) {
            $model->cancelledAt = $map['cancelledAt'];
        }

        if (isset($map['completedAt'])) {
            $model->completedAt = $map['completedAt'];
        }

        if (isset($map['createAt'])) {
            $model->createAt = $map['createAt'];
        }

        if (isset($map['expiresAt'])) {
            $model->expiresAt = $map['expiresAt'];
        }

        if (isset($map['failedAt'])) {
            $model->failedAt = $map['failedAt'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['lastErrorMsg'])) {
            $model->lastErrorMsg = $map['lastErrorMsg'];
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['object'])) {
            $model->object = $map['object'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['startedAt'])) {
            $model->startedAt = $map['startedAt'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        return $model;
    }
}
