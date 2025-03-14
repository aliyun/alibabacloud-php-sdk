<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaCensorJobRequest;

use AlibabaCloud\Tea\Model;

class scheduleConfig extends Model
{
    /**
     * @description The ID of the ApsaraVideo Media Processing (MPS) queue to which the job is submitted.
     *
     * @example 5246b8d12a62433ab77845074039****
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @description The job priority. A larger value indicates a higher priority. Valid values: 1 to 10.
     *
     * @example 6
     *
     * @var int
     */
    public $priority;
    protected $_name = [
        'pipelineId' => 'PipelineId',
        'priority' => 'Priority',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
