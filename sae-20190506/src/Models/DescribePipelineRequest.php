<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribePipelineRequest extends Model
{
    /**
     * @description The ID of the batch. You can call the [DescribeChangeOrder](~~126617~~) operation to obtain the ID.
     *
     * @example 917660ba-5092-44ca-b8e0-80012c96****
     *
     * @var string
     */
    public $pipelineId;
    protected $_name = [
        'pipelineId' => 'PipelineId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePipelineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        return $model;
    }
}
