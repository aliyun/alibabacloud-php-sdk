<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\SearchMediaWorkflowResponseBody\mediaWorkflowList;
use AlibabaCloud\Tea\Model;

class SearchMediaWorkflowResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var mediaWorkflowList
     */
    public $mediaWorkflowList;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'totalCount'        => 'TotalCount',
        'mediaWorkflowList' => 'MediaWorkflowList',
        'pageSize'          => 'PageSize',
        'requestId'         => 'RequestId',
        'pageNumber'        => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->mediaWorkflowList) {
            $res['MediaWorkflowList'] = null !== $this->mediaWorkflowList ? $this->mediaWorkflowList->toMap() : null;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchMediaWorkflowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['MediaWorkflowList'])) {
            $model->mediaWorkflowList = mediaWorkflowList::fromMap($map['MediaWorkflowList']);
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
