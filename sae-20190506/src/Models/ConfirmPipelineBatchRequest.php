<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ConfirmPipelineBatchRequest extends Model
{
    /**
     * @description true
     *
     * This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $confirm;

    /**
     * @description e2e-vds-feh-\\*\\*\\*
     *
     * This parameter is required.
     *
     * @example e2e-vds-feh-***
     *
     * @var string
     */
    public $pipelineId;
    protected $_name = [
        'confirm' => 'Confirm',
        'pipelineId' => 'PipelineId',
    ];

    public function validate() {}

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
     * @return ConfirmPipelineBatchRequest
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
