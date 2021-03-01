<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ContinuePipelineRequest extends Model
{
    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var bool
     */
    public $confirm;
    protected $_name = [
        'pipelineId' => 'PipelineId',
        'confirm'    => 'Confirm',
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
        if (null !== $this->confirm) {
            $res['Confirm'] = $this->confirm;
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
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Confirm'])) {
            $model->confirm = $map['Confirm'];
        }

        return $model;
    }
}
