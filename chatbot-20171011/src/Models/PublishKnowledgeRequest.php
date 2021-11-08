<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PublishKnowledgeRequest extends Model
{
    /**
     * @var bool
     */
    public $async;

    /**
     * @var int
     */
    public $knowledgeId;
    protected $_name = [
        'async'       => 'Async',
        'knowledgeId' => 'KnowledgeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
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
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }

        return $model;
    }
}
