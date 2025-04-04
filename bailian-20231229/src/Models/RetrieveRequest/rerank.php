<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveRequest;

use AlibabaCloud\Tea\Model;

class rerank extends Model
{
    /**
     * @description The name of the rank model. For more information, see [Create a knowledge base](https://www.alibabacloud.com/help/en/model-studio/user-guide/rag-knowledge-base). Valid values:
     *
     *   gte-rerank-hybrid: Recommended official model.
     *   gte-rerank
     *
     * @example gte-rerank-hybrid
     *
     * @var string
     */
    public $modelName;
    protected $_name = [
        'modelName' => 'ModelName',
    ];

    public function validate() {}

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
     * @return rerank
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
