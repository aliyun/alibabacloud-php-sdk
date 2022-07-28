<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class JoinPipelineGroupRequest extends Model
{
    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $pipelineIds;
    protected $_name = [
        'groupId'     => 'groupId',
        'pipelineIds' => 'pipelineIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }
        if (null !== $this->pipelineIds) {
            $res['pipelineIds'] = $this->pipelineIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JoinPipelineGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }
        if (isset($map['pipelineIds'])) {
            $model->pipelineIds = $map['pipelineIds'];
        }

        return $model;
    }
}
