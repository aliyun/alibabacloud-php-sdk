<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models;

use AlibabaCloud\Tea\Model;

class OperateWorkflowInstanceRequest extends Model
{
    /**
     * @example PAUSE
     *
     * @var string
     */
    public $execType;

    /**
     * @example wi-l9o479p8rrx****
     *
     * @var string
     */
    public $workflowInstanceId;

    /**
     * @example w-lxyy60mpgpg****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'execType'           => 'execType',
        'workflowInstanceId' => 'workflowInstanceId',
        'workspaceId'        => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->execType) {
            $res['execType'] = $this->execType;
        }
        if (null !== $this->workflowInstanceId) {
            $res['workflowInstanceId'] = $this->workflowInstanceId;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateWorkflowInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['execType'])) {
            $model->execType = $map['execType'];
        }
        if (isset($map['workflowInstanceId'])) {
            $model->workflowInstanceId = $map['workflowInstanceId'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
