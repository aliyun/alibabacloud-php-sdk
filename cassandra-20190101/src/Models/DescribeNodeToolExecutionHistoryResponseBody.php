<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeNodeToolExecutionHistoryResponseBody extends Model
{
    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $dataCenterId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $isEnded;

    /**
     * @var string
     */
    public $command;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $arguments;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $nodes;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $result;
    protected $_name = [
        'modifyTime'   => 'ModifyTime',
        'dataCenterId' => 'DataCenterId',
        'requestId'    => 'RequestId',
        'isEnded'      => 'IsEnded',
        'command'      => 'Command',
        'createTime'   => 'CreateTime',
        'arguments'    => 'Arguments',
        'regionId'     => 'RegionId',
        'errorMessage' => 'ErrorMessage',
        'nodes'        => 'Nodes',
        'jobId'        => 'JobId',
        'result'       => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->isEnded) {
            $res['IsEnded'] = $this->isEnded;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->arguments) {
            $res['Arguments'] = $this->arguments;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNodeToolExecutionHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IsEnded'])) {
            $model->isEnded = $map['IsEnded'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Arguments'])) {
            $model->arguments = $map['Arguments'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
