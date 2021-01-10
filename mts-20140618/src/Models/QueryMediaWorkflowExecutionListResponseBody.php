<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowExecutionListResponseBody\mediaWorkflowExecutionList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowExecutionListResponseBody\nonExistRunIds;
use AlibabaCloud\Tea\Model;

class QueryMediaWorkflowExecutionListResponseBody extends Model
{
    /**
     * @var nonExistRunIds
     */
    public $nonExistRunIds;

    /**
     * @var mediaWorkflowExecutionList
     */
    public $mediaWorkflowExecutionList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nonExistRunIds'             => 'NonExistRunIds',
        'mediaWorkflowExecutionList' => 'MediaWorkflowExecutionList',
        'requestId'                  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonExistRunIds) {
            $res['NonExistRunIds'] = null !== $this->nonExistRunIds ? $this->nonExistRunIds->toMap() : null;
        }
        if (null !== $this->mediaWorkflowExecutionList) {
            $res['MediaWorkflowExecutionList'] = null !== $this->mediaWorkflowExecutionList ? $this->mediaWorkflowExecutionList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMediaWorkflowExecutionListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NonExistRunIds'])) {
            $model->nonExistRunIds = nonExistRunIds::fromMap($map['NonExistRunIds']);
        }
        if (isset($map['MediaWorkflowExecutionList'])) {
            $model->mediaWorkflowExecutionList = mediaWorkflowExecutionList::fromMap($map['MediaWorkflowExecutionList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
