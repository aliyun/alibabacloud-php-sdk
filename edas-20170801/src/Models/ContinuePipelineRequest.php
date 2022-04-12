<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ContinuePipelineRequest extends Model
{
    /**
     * @var bool
     */
    public $confirm;

    /**
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
