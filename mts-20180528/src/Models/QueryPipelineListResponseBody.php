<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models;

use AlibabaCloud\SDK\Mts\V20180528\Models\QueryPipelineListResponseBody\nonExistPids;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryPipelineListResponseBody\pipelineList;
use AlibabaCloud\Tea\Model;

class QueryPipelineListResponseBody extends Model
{
    /**
     * @var nonExistPids
     */
    public $nonExistPids;

    /**
     * @var pipelineList
     */
    public $pipelineList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nonExistPids' => 'NonExistPids',
        'pipelineList' => 'PipelineList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonExistPids) {
            $res['NonExistPids'] = null !== $this->nonExistPids ? $this->nonExistPids->toMap() : null;
        }
        if (null !== $this->pipelineList) {
            $res['PipelineList'] = null !== $this->pipelineList ? $this->pipelineList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPipelineListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NonExistPids'])) {
            $model->nonExistPids = nonExistPids::fromMap($map['NonExistPids']);
        }
        if (isset($map['PipelineList'])) {
            $model->pipelineList = pipelineList::fromMap($map['PipelineList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
