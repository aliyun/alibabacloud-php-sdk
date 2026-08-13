<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetChatSessionResponseBody;

use AlibabaCloud\Dara\Model;

class messages extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $contextCleared;

    /**
     * @var bool
     */
    public $fromShare;

    /**
     * @var string
     */
    public $id;

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
    public $role;

    /**
     * @var string
     */
    public $shareUserName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var int
     */
    public $updateAt;

    /**
     * @var string
     */
    public $userFeedback;
    protected $_name = [
        'content' => 'content',
        'contextCleared' => 'contextCleared',
        'fromShare' => 'fromShare',
        'id' => 'id',
        'metadata' => 'metadata',
        'object' => 'object',
        'role' => 'role',
        'shareUserName' => 'shareUserName',
        'status' => 'status',
        'traceId' => 'traceId',
        'updateAt' => 'updateAt',
        'userFeedback' => 'userFeedback',
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
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->contextCleared) {
            $res['contextCleared'] = $this->contextCleared;
        }

        if (null !== $this->fromShare) {
            $res['fromShare'] = $this->fromShare;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
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

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->shareUserName) {
            $res['shareUserName'] = $this->shareUserName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->traceId) {
            $res['traceId'] = $this->traceId;
        }

        if (null !== $this->updateAt) {
            $res['updateAt'] = $this->updateAt;
        }

        if (null !== $this->userFeedback) {
            $res['userFeedback'] = $this->userFeedback;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['contextCleared'])) {
            $model->contextCleared = $map['contextCleared'];
        }

        if (isset($map['fromShare'])) {
            $model->fromShare = $map['fromShare'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
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

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['shareUserName'])) {
            $model->shareUserName = $map['shareUserName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }

        if (isset($map['updateAt'])) {
            $model->updateAt = $map['updateAt'];
        }

        if (isset($map['userFeedback'])) {
            $model->userFeedback = $map['userFeedback'];
        }

        return $model;
    }
}
