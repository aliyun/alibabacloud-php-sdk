<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class CreateFaqResponseBody extends Model
{
    /**
     * @example 30001979424
     *
     * @var int
     */
    public $knowledgeId;

    /**
     * @example 28805A7C-D695-548C-A31B-67E52C2C274F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'knowledgeId' => 'KnowledgeId',
        'requestId'   => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFaqResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
