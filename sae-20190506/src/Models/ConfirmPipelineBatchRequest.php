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
     * @description The ID of the batch. You can call the [DescribeChangeOrder](https://www.alibabacloud.com/help/zh/sae/serverless-app-engine-classic/developer-reference/api-sae-2019-05-06-describechangeorder-old?spm=a2c63.p38356.help-menu-search-118957.d_0) operation to obtain the ID.
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
