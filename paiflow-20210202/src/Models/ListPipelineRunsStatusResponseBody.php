<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models;

use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunsStatusResponseBody\nodes;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunsStatusResponseBody\outputs;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunsStatusResponseBody\pipelineRuns;
use AlibabaCloud\Tea\Model;

class ListPipelineRunsStatusResponseBody extends Model
{
    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @var outputs[]
     */
    public $outputs;

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
    protected $_name = [
        'nodes'        => 'Nodes',
        'outputs'      => 'Outputs',
        'pipelineRuns' => 'PipelineRuns',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = [];
            if (null !== $this->outputs && \is_array($this->outputs)) {
                $n = 0;
                foreach ($this->outputs as $item) {
                    $res['Outputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelineRunsStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n              = 0;
                foreach ($map['Outputs'] as $item) {
                    $model->outputs[$n++] = null !== $item ? outputs::fromMap($item) : $item;
                }
            }
        }
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

        return $model;
    }
}
