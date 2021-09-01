<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class ExecuteNodeRequest extends Model
{
    /**
     * @var string
     */
    public $processInstanceId;

    /**
     * @var string
     */
    public $processId;

    /**
     * @var string
     */
    public $nodeInstanceId;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $requestData;
    protected $_name = [
        'processInstanceId' => 'ProcessInstanceId',
        'processId'         => 'ProcessId',
        'nodeInstanceId'    => 'NodeInstanceId',
        'nodeId'            => 'NodeId',
        'requestData'       => 'RequestData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->processInstanceId) {
            $res['ProcessInstanceId'] = $this->processInstanceId;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->nodeInstanceId) {
            $res['NodeInstanceId'] = $this->nodeInstanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->requestData) {
            $res['RequestData'] = $this->requestData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProcessInstanceId'])) {
            $model->processInstanceId = $map['ProcessInstanceId'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['NodeInstanceId'])) {
            $model->nodeInstanceId = $map['NodeInstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['RequestData'])) {
            $model->requestData = $map['RequestData'];
        }

        return $model;
    }
}
