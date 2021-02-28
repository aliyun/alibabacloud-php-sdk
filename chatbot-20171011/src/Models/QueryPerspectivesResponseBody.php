<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryPerspectivesResponseBody\perspectives;
use AlibabaCloud\Tea\Model;

class QueryPerspectivesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var perspectives[]
     */
    public $perspectives;
    protected $_name = [
        'requestId'    => 'RequestId',
        'perspectives' => 'Perspectives',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->perspectives) {
            $res['Perspectives'] = [];
            if (null !== $this->perspectives && \is_array($this->perspectives)) {
                $n = 0;
                foreach ($this->perspectives as $item) {
                    $res['Perspectives'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Perspectives'])) {
            if (!empty($map['Perspectives'])) {
                $model->perspectives = [];
                $n                   = 0;
                foreach ($map['Perspectives'] as $item) {
                    $model->perspectives[$n++] = null !== $item ? perspectives::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
