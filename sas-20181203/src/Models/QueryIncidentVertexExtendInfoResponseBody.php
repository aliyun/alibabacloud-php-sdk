<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentVertexExtendInfoResponseBody\vertexExtendInfo;

class QueryIncidentVertexExtendInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $count;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (\is_array($this->vertexExtendInfo)) {
            Model::validateArray($this->vertexExtendInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->vertexExtendInfo)) {
                $res['VertexExtendInfo'] = [];
                $n1                      = 0;
                foreach ($this->vertexExtendInfo as $item1) {
                    $res['VertexExtendInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                      = 0;
                foreach ($map['VertexExtendInfo'] as $item1) {
                    $model->vertexExtendInfo[$n1++] = vertexExtendInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
