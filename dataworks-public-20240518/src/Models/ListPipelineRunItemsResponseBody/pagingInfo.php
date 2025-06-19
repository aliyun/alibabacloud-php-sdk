<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListPipelineRunItemsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListPipelineRunItemsResponseBody\pagingInfo\pipelineRunItems;

class pagingInfo extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var pipelineRunItems[]
     */
    public $pipelineRunItems;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'pipelineRunItems' => 'PipelineRunItems',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->pipelineRunItems)) {
            Model::validateArray($this->pipelineRunItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->pipelineRunItems) {
            if (\is_array($this->pipelineRunItems)) {
                $res['PipelineRunItems'] = [];
                $n1 = 0;
                foreach ($this->pipelineRunItems as $item1) {
                    $res['PipelineRunItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PipelineRunItems'])) {
            if (!empty($map['PipelineRunItems'])) {
                $model->pipelineRunItems = [];
                $n1 = 0;
                foreach ($map['PipelineRunItems'] as $item1) {
                    $model->pipelineRunItems[$n1] = pipelineRunItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
