<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class RetrieveRunRequest extends Model
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
     * @example assistantId
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
    protected $_name = [
        'assistantId' => 'assistantId',
        'originalAssistantId' => 'originalAssistantId',
        'runId' => 'runId',
        'sourceIdOfOriginalAssistantId' => 'sourceIdOfOriginalAssistantId',
        'sourceTypeOfOriginalAssistantId' => 'sourceTypeOfOriginalAssistantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assistantId) {
            $res['assistantId'] = $this->assistantId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RetrieveRunRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assistantId'])) {
            $model->assistantId = $map['assistantId'];
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

        return $model;
    }
}
