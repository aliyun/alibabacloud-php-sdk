<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeNodeToolExecutionHistoryResponseBody extends Model
{
    /**
     * @example ap-southeast-1a
     *
     * @var string
     */
    public $arguments;

    /**
     * @example status
     *
     * @var string
     */
    public $command;

    /**
     * @example 1603103307000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example ap-southeast-1a
     *
     * @var string
     */
    public $dataCenterId;

    /**
     * @example Error: The keyspace ap-southeast-1a, does not exist
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example true
     *
     * @var bool
     */
    public $isEnded;

    /**
     * @example job-y0edwqo993m*****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 1603103312000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example core-1
     *
     * @var string
     */
    public $nodes;

    /**
     * @example ap-southeast-1
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 94D5E0BE-F383-4BBB-B768-7FA3414E95A3
     *
     * @var string
     */
    public $requestId;

    /**
     * @example result
     *
     * @var string
     */
    public $result;
    protected $_name = [
        'arguments'    => 'Arguments',
        'command'      => 'Command',
        'createTime'   => 'CreateTime',
        'dataCenterId' => 'DataCenterId',
        'errorMessage' => 'ErrorMessage',
        'isEnded'      => 'IsEnded',
        'jobId'        => 'JobId',
        'modifyTime'   => 'ModifyTime',
        'nodes'        => 'Nodes',
        'regionId'     => 'RegionId',
        'requestId'    => 'RequestId',
        'result'       => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arguments) {
            $res['Arguments'] = $this->arguments;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->isEnded) {
            $res['IsEnded'] = $this->isEnded;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Arguments'])) {
            $model->arguments = $map['Arguments'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['IsEnded'])) {
            $model->isEnded = $map['IsEnded'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
