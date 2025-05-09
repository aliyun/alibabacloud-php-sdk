<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListPipelineRunsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListPipelineRunsResponseBody\pagingInfo\pipelineRuns;

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
     * @var pipelineRuns[]
     */
    public $pipelineRuns;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'pipelineRuns' => 'PipelineRuns',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->pipelineRuns)) {
            Model::validateArray($this->pipelineRuns);
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

        if (null !== $this->pipelineRuns) {
            if (\is_array($this->pipelineRuns)) {
                $res['PipelineRuns'] = [];
                $n1 = 0;
                foreach ($this->pipelineRuns as $item1) {
                    $res['PipelineRuns'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['PipelineRuns'])) {
            if (!empty($map['PipelineRuns'])) {
                $model->pipelineRuns = [];
                $n1 = 0;
                foreach ($map['PipelineRuns'] as $item1) {
                    $model->pipelineRuns[$n1++] = pipelineRuns::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
