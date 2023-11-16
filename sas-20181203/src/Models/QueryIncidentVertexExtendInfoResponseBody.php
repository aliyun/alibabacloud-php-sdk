<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentVertexExtendInfoResponseBody\vertexExtendInfo;
use AlibabaCloud\Tea\Model;

class QueryIncidentVertexExtendInfoResponseBody extends Model
{
    /**
     * @example 2
     *
     * @var string
     */
    public $count;

    /**
     * @example 0BCDBBF1-0048-535A-8529-67EA0CD1A807
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @var vertexExtendInfo[]
     */
    public $vertexExtendInfo;
    protected $_name = [
        'count'            => 'Count',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'vertexExtendInfo' => 'VertexExtendInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->vertexExtendInfo) {
            $res['VertexExtendInfo'] = [];
            if (null !== $this->vertexExtendInfo && \is_array($this->vertexExtendInfo)) {
                $n = 0;
                foreach ($this->vertexExtendInfo as $item) {
                    $res['VertexExtendInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryIncidentVertexExtendInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['VertexExtendInfo'])) {
            if (!empty($map['VertexExtendInfo'])) {
                $model->vertexExtendInfo = [];
                $n                       = 0;
                foreach ($map['VertexExtendInfo'] as $item) {
                    $model->vertexExtendInfo[$n++] = null !== $item ? vertexExtendInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
