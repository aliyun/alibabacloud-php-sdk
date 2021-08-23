<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class CreateKnowledgeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $knowledgeShrink;
    protected $_name = [
        'knowledgeShrink' => 'Knowledge',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->knowledgeShrink) {
            $res['Knowledge'] = $this->knowledgeShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateKnowledgeShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Knowledge'])) {
            $model->knowledgeShrink = $map['Knowledge'];
        }

        return $model;
    }
}
