<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class UpdateKnowledgeRequest extends Model
{
    /**
     * @var string
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
            $res['Knowledge'] = $this->knowledge;
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
            $model->knowledge = $map['Knowledge'];
        }

        return $model;
    }
}
