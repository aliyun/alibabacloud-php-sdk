<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeNodeToolExecutionHistoriesResponseBody\histories;

use AlibabaCloud\Tea\Model;

class history extends Model
{
    /**
     * @example 10093
     *
     * @var string
     */
    public $arguments;

    /**
     * @example settimeout misc
     *
     * @var string
     */
    public $command;

    /**
     * @example 1576725956000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example cn-shanghai-f
     *
     * @var string
     */
    public $dataCenterId;

    /**
     * @example See \"nodetool help\" or \"nodetool help
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
     * @example job-C3zcrKtZ****qapO
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 1576725689000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example core-1,core-2
     *
     * @var string
     */
    public $nodes;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return history
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

        return $model;
    }
}
