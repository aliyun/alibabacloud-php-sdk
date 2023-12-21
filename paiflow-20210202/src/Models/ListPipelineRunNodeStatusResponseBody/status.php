<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunNodeStatusResponseBody;

use AlibabaCloud\Tea\Model;

class status extends Model
{
    /**
     * @example 2021-01-21T17:12:40.232Z
     *
     * @var string
     */
    public $finishedAt;

    /**
     * @example node-1jlzg7ncv0j6i3****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example sql
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example {\"DLC_INSTANCE_IDS\": \"i-12224afdfsaf,i-22224afdfsaf,i-13224afdfsaf\"}
     *
     * @var string
     */
    public $runtimeInfo;

    /**
     * @example 2021-01-21T17:12:35.232Z
     *
     * @var string
     */
    public $startedAt;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'finishedAt'  => 'FinishedAt',
        'nodeId'      => 'NodeId',
        'nodeName'    => 'NodeName',
        'runtimeInfo' => 'RuntimeInfo',
        'startedAt'   => 'StartedAt',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishedAt) {
            $res['FinishedAt'] = $this->finishedAt;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->runtimeInfo) {
            $res['RuntimeInfo'] = $this->runtimeInfo;
        }
        if (null !== $this->startedAt) {
            $res['StartedAt'] = $this->startedAt;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return status
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FinishedAt'])) {
            $model->finishedAt = $map['FinishedAt'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['RuntimeInfo'])) {
            $model->runtimeInfo = $map['RuntimeInfo'];
        }
        if (isset($map['StartedAt'])) {
            $model->startedAt = $map['StartedAt'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
