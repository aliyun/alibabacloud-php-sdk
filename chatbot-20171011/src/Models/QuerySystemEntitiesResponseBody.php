<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\QuerySystemEntitiesResponseBody\systemEntities;
use AlibabaCloud\Tea\Model;

class QuerySystemEntitiesResponseBody extends Model
{
    /**
     * @example F6E5D7FE-6165-4478-BC52-9E0D1DAD5C84
     *
     * @var string
     */
    public $requestId;

    /**
     * @var systemEntities[]
     */
    public $systemEntities;
    protected $_name = [
        'requestId'      => 'RequestId',
        'systemEntities' => 'SystemEntities',
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
        if (null !== $this->systemEntities) {
            $res['SystemEntities'] = [];
            if (null !== $this->systemEntities && \is_array($this->systemEntities)) {
                $n = 0;
                foreach ($this->systemEntities as $item) {
                    $res['SystemEntities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySystemEntitiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SystemEntities'])) {
            if (!empty($map['SystemEntities'])) {
                $model->systemEntities = [];
                $n                     = 0;
                foreach ($map['SystemEntities'] as $item) {
                    $model->systemEntities[$n++] = null !== $item ? systemEntities::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
