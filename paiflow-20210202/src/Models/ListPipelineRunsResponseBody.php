<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models;

use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunsResponseBody\pipelineRuns;
use AlibabaCloud\Tea\Model;

class ListPipelineRunsResponseBody extends Model
{
    /**
     * @var pipelineRuns[]
     */
    public $pipelineRuns;

    /**
     * @example 473469C7-****-****-****-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 15
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pipelineRuns' => 'PipelineRuns',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pipelineRuns) {
            $res['PipelineRuns'] = [];
            if (null !== $this->pipelineRuns && \is_array($this->pipelineRuns)) {
                $n = 0;
                foreach ($this->pipelineRuns as $item) {
                    $res['PipelineRuns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelineRunsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PipelineRuns'])) {
            if (!empty($map['PipelineRuns'])) {
                $model->pipelineRuns = [];
                $n                   = 0;
                foreach ($map['PipelineRuns'] as $item) {
                    $model->pipelineRuns[$n++] = null !== $item ? pipelineRuns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
