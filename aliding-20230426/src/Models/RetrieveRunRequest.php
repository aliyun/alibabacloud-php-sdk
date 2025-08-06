<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class RetrieveRunRequest extends Model
{
    /**
     * @var string
     */
    public $assistantId;

    /**
     * @var string
     */
    public $originalAssistantId;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $sourceIdOfOriginalAssistantId;

    /**
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
