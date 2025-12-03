<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetReleaseStagePipelineRunResponseBody\pipelineRun;

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
        if (null !== $this->pipelineRun) {
            $this->pipelineRun->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pipelineRun) {
            $res['pipelineRun'] = null !== $this->pipelineRun ? $this->pipelineRun->toArray($noStream) : $this->pipelineRun;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pipelineRun'])) {
            $model->pipelineRun = pipelineRun::fromMap($map['pipelineRun']);
        }

        return $model;
    }
}
