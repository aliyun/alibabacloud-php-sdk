<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody\pipelineRun;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody\pipelineRun\stages\stageInfo;

class stages extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var stageInfo
     */
    public $stageInfo;
    protected $_name = [
        'name'      => 'name',
        'stageInfo' => 'stageInfo',
    ];

    public function validate()
    {
        if (null !== $this->stageInfo) {
            $this->stageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->stageInfo) {
            $res['stageInfo'] = null !== $this->stageInfo ? $this->stageInfo->toArray($noStream) : $this->stageInfo;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['stageInfo'])) {
            $model->stageInfo = stageInfo::fromMap($map['stageInfo']);
        }

        return $model;
    }
}
