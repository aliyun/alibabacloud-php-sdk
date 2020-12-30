<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeNodeToolExecutionHistoriesResponseBody\histories;

use AlibabaCloud\Tea\Model;

class history extends Model
{
    /**
     * @var string
     */
    public $nodes;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $isEnded;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $dataCenterId;

    /**
     * @var string
     */
    public $arguments;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $modifyTime;
    protected $_name = [
        'nodes'        => 'Nodes',
        'errorMessage' => 'ErrorMessage',
        'isEnded'      => 'IsEnded',
        'createTime'   => 'CreateTime',
        'jobId'        => 'JobId',
        'command'      => 'Command',
        'dataCenterId' => 'DataCenterId',
        'arguments'    => 'Arguments',
        'regionId'     => 'RegionId',
        'modifyTime'   => 'ModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->isEnded) {
            $res['IsEnded'] = $this->isEnded;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
        }
        if (null !== $this->arguments) {
            $res['Arguments'] = $this->arguments;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
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
        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['IsEnded'])) {
            $model->isEnded = $map['IsEnded'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }
        if (isset($map['Arguments'])) {
            $model->arguments = $map['Arguments'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
