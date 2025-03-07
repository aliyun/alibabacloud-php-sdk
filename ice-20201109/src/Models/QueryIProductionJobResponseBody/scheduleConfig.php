<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryIProductionJobResponseBody;

use AlibabaCloud\Tea\Model;

class scheduleConfig extends Model
{
    /**
     * @description The ID of the ApsaraVideo Media Processing (MPS) queue.
     *
     * @example a54fdc9c9aab413caef0d1150f565e86
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @description The priority of the job in the MPS queue to which the job is added.
     *
     *   A value of 10 indicates the highest priority.
     *   Default value: **6**.
     *
     * @example 6
     *
     * @var int
     */
    public $priority;
    protected $_name = [
        'pipelineId' => 'PipelineId',
        'priority'   => 'Priority',
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
