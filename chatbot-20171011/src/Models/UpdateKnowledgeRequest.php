<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateKnowledgeRequest\knowledge;
use AlibabaCloud\Tea\Model;

class UpdateKnowledgeRequest extends Model
{
    /**
     * @var knowledge
     */
    public $knowledge;
    protected $_name = [
        'knowledge' => 'Knowledge',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->knowledge) {
            $res['Knowledge'] = null !== $this->knowledge ? $this->knowledge->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateKnowledgeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Knowledge'])) {
            $model->knowledge = knowledge::fromMap($map['Knowledge']);
        }

        return $model;
    }
}
