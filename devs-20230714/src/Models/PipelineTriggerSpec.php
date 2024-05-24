<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class PipelineTriggerSpec extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var EventFilterConfig
     */
    public $eventFilter;

    /**
     * @example acs:ram::1431999****8149:role/aliyundevsdefaultrole
     *
     * @var string
     */
    public $roleArn;

    /**
     * @var RunPipelineConfig
     */
    public $runPipeline;
    protected $_name = [
        'eventFilter' => 'eventFilter',
        'roleArn'     => 'roleArn',
        'runPipeline' => 'runPipeline',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventFilter) {
            $res['eventFilter'] = null !== $this->eventFilter ? $this->eventFilter->toMap() : null;
        }
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }
        if (null !== $this->runPipeline) {
            $res['runPipeline'] = null !== $this->runPipeline ? $this->runPipeline->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PipelineTriggerSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['eventFilter'])) {
            $model->eventFilter = EventFilterConfig::fromMap($map['eventFilter']);
        }
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }
        if (isset($map['runPipeline'])) {
            $model->runPipeline = RunPipelineConfig::fromMap($map['runPipeline']);
        }

        return $model;
    }
}
