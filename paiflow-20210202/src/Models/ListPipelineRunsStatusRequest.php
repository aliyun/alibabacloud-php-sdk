<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models;

use AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunsStatusRequest\nodes;
use AlibabaCloud\Tea\Model;

class ListPipelineRunsStatusRequest extends Model
{
    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @var string
     */
    public $outputType;

    /**
     * @var string[]
     */
    public $pipelineRuns;

    /**
     * @example 948**
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'nodes'        => 'Nodes',
        'outputType'   => 'OutputType',
        'pipelineRuns' => 'PipelineRuns',
        'workspaceId'  => 'WorkspaceId',
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
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->pipelineRuns) {
            $res['PipelineRuns'] = $this->pipelineRuns;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelineRunsStatusRequest
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
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['PipelineRuns'])) {
            if (!empty($map['PipelineRuns'])) {
                $model->pipelineRuns = $map['PipelineRuns'];
            }
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
