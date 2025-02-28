<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class ListMessageRequest extends Model
{
    /**
     * @var string
     */
    public $assistantId;
    /**
     * @var int
     */
    public $limit;
    /**
     * @var string
     */
    public $order;
    /**
     * @var string
     */
    public $originalAssistantid;
    /**
     * @var string
     */
    public $runId;
    /**
     * @var string
     */
    public $threadId;
    protected $_name = [
        'assistantId'         => 'assistantId',
        'limit'               => 'limit',
        'order'               => 'order',
        'originalAssistantid' => 'originalAssistantid',
        'runId'               => 'runId',
        'threadId'            => 'threadId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assistantId) {
            $res['assistantId'] = $this->assistantId;
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->order) {
            $res['order'] = $this->order;
        }

        if (null !== $this->originalAssistantid) {
            $res['originalAssistantid'] = $this->originalAssistantid;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
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
        if (isset($map['assistantId'])) {
            $model->assistantId = $map['assistantId'];
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['order'])) {
            $model->order = $map['order'];
        }

        if (isset($map['originalAssistantid'])) {
            $model->originalAssistantid = $map['originalAssistantid'];
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        return $model;
    }
}
