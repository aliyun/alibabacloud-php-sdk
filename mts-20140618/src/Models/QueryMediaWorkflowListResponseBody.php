<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowListResponseBody\mediaWorkflowList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowListResponseBody\nonExistMediaWorkflowIds;
use AlibabaCloud\Tea\Model;

class QueryMediaWorkflowListResponseBody extends Model
{
    /**
     * @var nonExistMediaWorkflowIds
     */
    public $nonExistMediaWorkflowIds;

    /**
     * @var mediaWorkflowList
     */
    public $mediaWorkflowList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nonExistMediaWorkflowIds' => 'NonExistMediaWorkflowIds',
        'mediaWorkflowList'        => 'MediaWorkflowList',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonExistMediaWorkflowIds) {
            $res['NonExistMediaWorkflowIds'] = null !== $this->nonExistMediaWorkflowIds ? $this->nonExistMediaWorkflowIds->toMap() : null;
        }
        if (null !== $this->mediaWorkflowList) {
            $res['MediaWorkflowList'] = null !== $this->mediaWorkflowList ? $this->mediaWorkflowList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMediaWorkflowListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NonExistMediaWorkflowIds'])) {
            $model->nonExistMediaWorkflowIds = nonExistMediaWorkflowIds::fromMap($map['NonExistMediaWorkflowIds']);
        }
        if (isset($map['MediaWorkflowList'])) {
            $model->mediaWorkflowList = mediaWorkflowList::fromMap($map['MediaWorkflowList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
