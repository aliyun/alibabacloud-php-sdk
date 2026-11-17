<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class RetryKnowledgeBaseBuildTaskInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $taskInstanceId;
    protected $_name = [
        'clientToken' => 'ClientToken',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['TaskInstanceId'])) {
            $model->taskInstanceId = $map['TaskInstanceId'];
        }

        return $model;
    }
}
