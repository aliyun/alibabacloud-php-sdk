<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPipelineListResponseBody\nonExistPids;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPipelineListResponseBody\pipelineList;
use AlibabaCloud\Tea\Model;

class QueryPipelineListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pipelineList
     */
    public $pipelineList;

    /**
     * @var nonExistPids
     */
    public $nonExistPids;
    protected $_name = [
        'requestId'    => 'RequestId',
        'pipelineList' => 'PipelineList',
        'nonExistPids' => 'NonExistPids',
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
        if (null !== $this->pipelineList) {
            $res['PipelineList'] = null !== $this->pipelineList ? $this->pipelineList->toMap() : null;
        }
        if (null !== $this->nonExistPids) {
            $res['NonExistPids'] = null !== $this->nonExistPids ? $this->nonExistPids->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PipelineList'])) {
            $model->pipelineList = pipelineList::fromMap($map['PipelineList']);
        }
        if (isset($map['NonExistPids'])) {
            $model->nonExistPids = nonExistPids::fromMap($map['NonExistPids']);
        }

        return $model;
    }
}
