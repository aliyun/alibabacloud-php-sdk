<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPipelineListResponseBody\nonExistPids;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPipelineListResponseBody\pipelineList;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->nonExistPids) {
            $this->nonExistPids->validate();
        }
        if (null !== $this->pipelineList) {
            $this->pipelineList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nonExistPids) {
            $res['NonExistPids'] = null !== $this->nonExistPids ? $this->nonExistPids->toArray($noStream) : $this->nonExistPids;
        }

        if (null !== $this->pipelineList) {
            $res['PipelineList'] = null !== $this->pipelineList ? $this->pipelineList->toArray($noStream) : $this->pipelineList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
