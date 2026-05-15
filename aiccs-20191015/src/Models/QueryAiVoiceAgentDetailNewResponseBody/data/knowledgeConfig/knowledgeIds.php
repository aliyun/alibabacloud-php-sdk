<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\knowledgeConfig;

use AlibabaCloud\Dara\Model;

class knowledgeIds extends Model
{
    /**
     * @var int
     */
    public $knowledgeId;

    /**
     * @var string
     */
    public $knowledgeName;
    protected $_name = [
        'knowledgeId' => 'KnowledgeId',
        'knowledgeName' => 'KnowledgeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }

        if (null !== $this->knowledgeName) {
            $res['KnowledgeName'] = $this->knowledgeName;
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
        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }

        if (isset($map['KnowledgeName'])) {
            $model->knowledgeName = $map['KnowledgeName'];
        }

        return $model;
    }
}
