<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class GetInterveneImportTaskInfoRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 67c520d1fa43455ea44fb69fa402d54d_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 19162157
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'taskId'   => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInterveneImportTaskInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
