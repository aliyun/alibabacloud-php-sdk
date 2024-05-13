<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskTimeVariablesRequest extends Model
{
    /**
     * @description The ID of the task node. You can call the [GetTaskInstanceRelation](https://help.aliyun.com/document_detail/424711.html) operation to query the node ID.
     *
     * This parameter is required.
     * @example 43****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The ID of the tenant.
     *
     * > :To view the ID of the tenant, go to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [View information about the current tenant](https://help.aliyun.com/document_detail/181330.html).
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description The time variables configured for the node. The value of this parameter must be a JSON string.
     *
     * This parameter is required.
     * @example {"variables":[ {"name":"var", "pattern":"yyyy-MM-dd|+0m+0h-2d+0w+0M+1y"} ]}
     *
     * @var string
     */
    public $timeVariables;
    protected $_name = [
        'nodeId'        => 'NodeId',
        'tid'           => 'Tid',
        'timeVariables' => 'TimeVariables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->timeVariables) {
            $res['TimeVariables'] = $this->timeVariables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskTimeVariablesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['TimeVariables'])) {
            $model->timeVariables = $map['TimeVariables'];
        }

        return $model;
    }
}
