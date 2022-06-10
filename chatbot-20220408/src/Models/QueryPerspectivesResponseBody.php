<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\QueryPerspectivesResponseBody\perspectives;
use AlibabaCloud\Tea\Model;

class QueryPerspectivesResponseBody extends Model
{
    /**
     * @description 视角列表
     *
     * @var perspectives[]
     */
    public $perspectives;

    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'perspectives' => 'Perspectives',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->perspectives) {
            $res['Perspectives'] = [];
            if (null !== $this->perspectives && \is_array($this->perspectives)) {
                $n = 0;
                foreach ($this->perspectives as $item) {
                    $res['Perspectives'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPerspectivesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Perspectives'])) {
            if (!empty($map['Perspectives'])) {
                $model->perspectives = [];
                $n                   = 0;
                foreach ($map['Perspectives'] as $item) {
                    $model->perspectives[$n++] = null !== $item ? perspectives::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
