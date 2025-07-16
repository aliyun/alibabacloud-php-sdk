<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class ListMessageRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example assistantId1
     *
     * @var string
     */
    public $assistantId;

    /**
     * @example 20
     *
     * @var int
     */
    public $limit;

    /**
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @example assistantId2
     *
     * @var string
     */
    public $originalAssistantId;

    /**
     * @example runId123
     *
     * @var string
     */
    public $runId;

    /**
     * @example agentKey1
     *
     * @var string
     */
    public $sourceIdOfOriginalAssistantId;

    /**
     * @example 1
     *
     * @var string
     */
    public $sourceTypeOfOriginalAssistantId;

    /**
     * @description This parameter is required.
     *
     * @example threadId123
     *
     * @var string
     */
    public $threadId;
    protected $_name = [
        'assistantId' => 'assistantId',
        'limit' => 'limit',
        'order' => 'order',
        'originalAssistantId' => 'originalAssistantId',
        'runId' => 'runId',
        'sourceIdOfOriginalAssistantId' => 'sourceIdOfOriginalAssistantId',
        'sourceTypeOfOriginalAssistantId' => 'sourceTypeOfOriginalAssistantId',
        'threadId' => 'threadId',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->originalAssistantId) {
            $res['originalAssistantId'] = $this->originalAssistantId;
        }
        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }
        if (null !== $this->sourceIdOfOriginalAssistantId) {
            $res['sourceIdOfOriginalAssistantId'] = $this->sourceIdOfOriginalAssistantId;
        }
        if (null !== $this->sourceTypeOfOriginalAssistantId) {
            $res['sourceTypeOfOriginalAssistantId'] = $this->sourceTypeOfOriginalAssistantId;
        }
        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMessageRequest
     */
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
        if (isset($map['originalAssistantId'])) {
            $model->originalAssistantId = $map['originalAssistantId'];
        }
        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }
        if (isset($map['sourceIdOfOriginalAssistantId'])) {
            $model->sourceIdOfOriginalAssistantId = $map['sourceIdOfOriginalAssistantId'];
        }
        if (isset($map['sourceTypeOfOriginalAssistantId'])) {
            $model->sourceTypeOfOriginalAssistantId = $map['sourceTypeOfOriginalAssistantId'];
        }
        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        return $model;
    }
}
