<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetReleaseStagePipelineRunResponseBody\pipelineRun;
use AlibabaCloud\Tea\Model;

class GetReleaseStagePipelineRunResponseBody extends Model
{
    /**
     * @var pipelineRun
     */
    public $pipelineRun;
    protected $_name = [
        'pipelineRun' => 'pipelineRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pipelineRun) {
            $res['pipelineRun'] = null !== $this->pipelineRun ? $this->pipelineRun->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetReleaseStagePipelineRunResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pipelineRun'])) {
            $model->pipelineRun = pipelineRun::fromMap($map['pipelineRun']);
        }

        return $model;
    }
}
