<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListUpstreamAppKeyRelationsResponseBody\relationList;
use AlibabaCloud\Tea\Model;

class ListUpstreamAppKeyRelationsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var relationList
     */
    public $relationList;
    protected $_name = [
        'requestId'    => 'RequestId',
        'relationList' => 'RelationList',
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
        if (null !== $this->relationList) {
            $res['RelationList'] = null !== $this->relationList ? $this->relationList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUpstreamAppKeyRelationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RelationList'])) {
            $model->relationList = relationList::fromMap($map['RelationList']);
        }

        return $model;
    }
}
