<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PublishKnowledgeRequest extends Model
{
    /**
     * @var int
     */
    public $knowledgeId;

    /**
     * @var bool
     */
    public $async;
    protected $_name = [
        'knowledgeId' => 'KnowledgeId',
        'async'       => 'Async',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishKnowledgeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }

        return $model;
    }
}
