<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class GetInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $pipelineNodeId;
    protected $_name = [
        'pipelineNodeId' => 'PipelineNodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pipelineNodeId) {
            $res['PipelineNodeId'] = $this->pipelineNodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PipelineNodeId'])) {
            $model->pipelineNodeId = $map['PipelineNodeId'];
        }

        return $model;
    }
}
