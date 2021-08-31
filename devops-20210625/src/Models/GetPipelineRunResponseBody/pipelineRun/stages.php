<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody\pipelineRun;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineRunResponseBody\pipelineRun\stages\stageInfo;
use AlibabaCloud\Tea\Model;

class stages extends Model
{
    /**
     * @description 阶段名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 阶段详情
     *
     * @var stageInfo
     */
    public $stageInfo;
    protected $_name = [
        'name'      => 'name',
        'stageInfo' => 'stageInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->stageInfo) {
            $res['stageInfo'] = null !== $this->stageInfo ? $this->stageInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stages
     */
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
