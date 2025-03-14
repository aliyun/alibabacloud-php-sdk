<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConnectFlowResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The time when the flow was created.
     *
     * @example 2024-07-18T01:29:24Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The flow ID.
     *
     * @example 34900dc6-90ec-4968-af3c-fcd87f231a5f
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The flow name.
     *
     * @example AliTestFlow
     *
     * @var string
     */
    public $flowName;

    /**
     * @description The state of the flow.
     *
     * @example online
     *
     * @var string
     */
    public $flowStatus;

    /**
     * @description The time when the flow is started.
     *
     * @example 2024-07-18T01:39:24Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'flowId' => 'FlowId',
        'flowName' => 'FlowName',
        'flowStatus' => 'FlowStatus',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->flowStatus) {
            $res['FlowStatus'] = $this->flowStatus;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['FlowStatus'])) {
            $model->flowStatus = $map['FlowStatus'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
