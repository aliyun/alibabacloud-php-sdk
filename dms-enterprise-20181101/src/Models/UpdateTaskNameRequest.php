<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskNameRequest extends Model
{
    /**
     * @description The error code returned if the request failed.
     *
     * @example 449***
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The ID of the request. You can use the ID to locate logs and troubleshoot issues.
     *
     * @example Spark-test
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The name of the node. You can call the [GetTaskInstanceRelation](~~424711~~) operation to query the node name.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'nodeId'   => 'NodeId',
        'nodeName' => 'NodeName',
        'tid'      => 'Tid',
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
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
