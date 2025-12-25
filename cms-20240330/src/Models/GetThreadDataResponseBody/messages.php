<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetThreadDataResponseBody;

use AlibabaCloud\Dara\Model;

class messages extends Model
{
    /**
     * @var string
     */
    public $callerUid;

    /**
     * @var string
     */
    public $digitalEmployeeName;

    /**
     * @var mixed[][]
     */
    public $items;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $ownerUid;

    /**
     * @var string
     */
    public $parentMessageId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $threadId;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var string[]
     */
    public $variables;
    protected $_name = [
        'callerUid' => 'callerUid',
        'digitalEmployeeName' => 'digitalEmployeeName',
        'items' => 'items',
        'messageId' => 'messageId',
        'ownerUid' => 'ownerUid',
        'parentMessageId' => 'parentMessageId',
        'region' => 'region',
        'role' => 'role',
        'runId' => 'runId',
        'threadId' => 'threadId',
        'timestamp' => 'timestamp',
        'traceId' => 'traceId',
        'variables' => 'variables',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callerUid) {
            $res['callerUid'] = $this->callerUid;
        }

        if (null !== $this->digitalEmployeeName) {
            $res['digitalEmployeeName'] = $this->digitalEmployeeName;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    if (\is_array($item1)) {
                        $res['items'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['items'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        if (null !== $this->ownerUid) {
            $res['ownerUid'] = $this->ownerUid;
        }

        if (null !== $this->parentMessageId) {
            $res['parentMessageId'] = $this->parentMessageId;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        if (null !== $this->traceId) {
            $res['traceId'] = $this->traceId;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['variables'] = [];
                foreach ($this->variables as $key1 => $value1) {
                    $res['variables'][$key1] = $value1;
                }
            }
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
        if (isset($map['callerUid'])) {
            $model->callerUid = $map['callerUid'];
        }

        if (isset($map['digitalEmployeeName'])) {
            $model->digitalEmployeeName = $map['digitalEmployeeName'];
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    if (!empty($item1)) {
                        $model->items[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->items[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        if (isset($map['ownerUid'])) {
            $model->ownerUid = $map['ownerUid'];
        }

        if (isset($map['parentMessageId'])) {
            $model->parentMessageId = $map['parentMessageId'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }

        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                foreach ($map['variables'] as $key1 => $value1) {
                    $model->variables[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
