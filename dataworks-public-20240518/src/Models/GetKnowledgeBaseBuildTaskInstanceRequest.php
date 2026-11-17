<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class GetKnowledgeBaseBuildTaskInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $taskInstanceId;
    protected $_name = [
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'taskInstanceId' => 'TaskInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->taskInstanceId) {
            $res['TaskInstanceId'] = $this->taskInstanceId;
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
        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['TaskInstanceId'])) {
            $model->taskInstanceId = $map['TaskInstanceId'];
        }

        return $model;
    }
}
