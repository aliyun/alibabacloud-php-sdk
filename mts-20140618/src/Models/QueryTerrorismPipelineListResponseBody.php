<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismPipelineListResponseBody\nonExistIds;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismPipelineListResponseBody\pipelineList;
use AlibabaCloud\Tea\Model;

class QueryTerrorismPipelineListResponseBody extends Model
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
     * @var nonExistIds
     */
    public $nonExistIds;
    protected $_name = [
        'requestId'    => 'RequestId',
        'pipelineList' => 'PipelineList',
        'nonExistIds'  => 'NonExistIds',
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
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTerrorismPipelineListResponseBody
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
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }

        return $model;
    }
}
