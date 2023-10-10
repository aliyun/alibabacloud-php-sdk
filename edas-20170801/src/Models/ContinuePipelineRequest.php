<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ContinuePipelineRequest extends Model
{
    /**
     * @description Specifies whether to release the next batch. Valid values:
     *
     *   true: releases the next batch.
     *   false: does not release the next batch.
     *
     * @example true
     *
     * @var bool
     */
    public $confirm;

    /**
     * @description The ID of the change process. You can call the GetChangeOrderInfo operation to query the ID of the change process that corresponds to a specific batch. For more information, see [GetChangeOrderInfo](~~62072~~).
     *
     * @example 5648dbd7-df13********************
     *
     * @var string
     */
    public $pipelineId;
    protected $_name = [
        'confirm'    => 'Confirm',
        'pipelineId' => 'PipelineId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confirm) {
            $res['Confirm'] = $this->confirm;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContinuePipelineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Confirm'])) {
            $model->confirm = $map['Confirm'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        return $model;
    }
}
