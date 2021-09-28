<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\MoveResourcesResponseBody\responses;
use AlibabaCloud\Tea\Model;

class MoveResourcesResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var responses[]
     */
    public $responses;
    protected $_name = [
        'requestId' => 'RequestId',
        'responses' => 'Responses',
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
        if (null !== $this->responses) {
            $res['Responses'] = [];
            if (null !== $this->responses && \is_array($this->responses)) {
                $n = 0;
                foreach ($this->responses as $item) {
                    $res['Responses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Responses'])) {
            if (!empty($map['Responses'])) {
                $model->responses = [];
                $n                = 0;
                foreach ($map['Responses'] as $item) {
                    $model->responses[$n++] = null !== $item ? responses::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
