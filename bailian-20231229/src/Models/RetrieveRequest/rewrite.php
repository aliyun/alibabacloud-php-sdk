<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveRequest;

use AlibabaCloud\Tea\Model;

class rewrite extends Model
{
    /**
     * @description Conversation rewriting model name. The query rewriting model automatically adjusts the original prompt based on the context to improve retrieval performance. Valid value:
     *
     *   conv-rewrite-qwen-1.8b
     *
     * By default, this parameter is left empty, which means conv-rewrite-qwen-1.8b is used.
     * @example conv-rewrite-qwen-1.8b
     *
     * @var string
     */
    public $modelName;
    protected $_name = [
        'modelName' => 'ModelName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rewrite
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        return $model;
    }
}
