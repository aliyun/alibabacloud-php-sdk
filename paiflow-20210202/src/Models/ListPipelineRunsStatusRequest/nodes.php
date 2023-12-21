<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunsStatusRequest;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @example node-hynm2bv8wqhp5esfx1
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example flow-hynm2bv8wqhp5esfxq
     *
     * @var string
     */
    public $pipelineRunId;
    protected $_name = [
        'nodeId'        => 'NodeId',
        'pipelineRunId' => 'PipelineRunId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->pipelineRunId) {
            $res['PipelineRunId'] = $this->pipelineRunId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['PipelineRunId'])) {
            $model->pipelineRunId = $map['PipelineRunId'];
        }

        return $model;
    }
}
