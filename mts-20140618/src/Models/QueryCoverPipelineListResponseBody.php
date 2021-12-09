<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverPipelineListResponseBody\nonExistIds;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCoverPipelineListResponseBody\pipelineList;
use AlibabaCloud\Tea\Model;

class QueryCoverPipelineListResponseBody extends Model
{
    /**
     * @var nonExistIds
     */
    public $nonExistIds;

    /**
     * @var pipelineList
     */
    public $pipelineList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nonExistIds'  => 'NonExistIds',
        'pipelineList' => 'PipelineList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
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
     * @return QueryCoverPipelineListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
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
