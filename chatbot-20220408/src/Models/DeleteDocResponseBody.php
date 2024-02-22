<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class DeleteDocResponseBody extends Model
{
    /**
     * @example 30002406051
     *
     * @var int
     */
    public $knowledgeId;

    /**
     * @example DFB71B34-4188-4EA2-9988-EF3014E75910
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
     * @return DeleteDocResponseBody
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
