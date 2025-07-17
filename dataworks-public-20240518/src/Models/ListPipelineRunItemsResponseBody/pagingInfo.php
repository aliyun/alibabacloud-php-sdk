<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListPipelineRunItemsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListPipelineRunItemsResponseBody\pagingInfo\pipelineRunItems;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var pipelineRunItems[]
     */
    public $pipelineRunItems;

    /**
     * @example 12
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'pipelineRunItems' => 'PipelineRunItems',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pipelineRunItems) {
            $res['PipelineRunItems'] = [];
            if (null !== $this->pipelineRunItems && \is_array($this->pipelineRunItems)) {
                $n = 0;
                foreach ($this->pipelineRunItems as $item) {
                    $res['PipelineRunItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pagingInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PipelineRunItems'])) {
            if (!empty($map['PipelineRunItems'])) {
                $model->pipelineRunItems = [];
                $n = 0;
                foreach ($map['PipelineRunItems'] as $item) {
                    $model->pipelineRunItems[$n++] = null !== $item ? pipelineRunItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
