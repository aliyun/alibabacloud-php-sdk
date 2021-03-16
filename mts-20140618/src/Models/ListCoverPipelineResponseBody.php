<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\ListCoverPipelineResponseBody\pipelineList;
use AlibabaCloud\Tea\Model;

class ListCoverPipelineResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

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

    /**
     * @var pipelineList
     */
    public $pipelineList;
    protected $_name = [
        'totalCount'   => 'TotalCount',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'pageNumber'   => 'PageNumber',
        'pipelineList' => 'PipelineList',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pipelineList) {
            $res['PipelineList'] = null !== $this->pipelineList ? $this->pipelineList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCoverPipelineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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
        if (isset($map['PipelineList'])) {
            $model->pipelineList = pipelineList::fromMap($map['PipelineList']);
        }

        return $model;
    }
}
