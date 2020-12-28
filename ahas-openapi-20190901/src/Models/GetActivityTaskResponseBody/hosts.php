<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetActivityTaskResponseBody;

use AlibabaCloud\Tea\Model;

class hosts extends Model
{
    /**
     * @var string
     */
    public $hostIp;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $expId;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'hostIp'       => 'HostIp',
        'endTime'      => 'EndTime',
        'startTime'    => 'StartTime',
        'data'         => 'Data',
        'errorMessage' => 'ErrorMessage',
        'expId'        => 'ExpId',
        'result'       => 'Result',
        'state'        => 'State',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostIp) {
            $res['HostIp'] = $this->hostIp;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->expId) {
            $res['ExpId'] = $this->expId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hosts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostIp'])) {
            $model->hostIp = $map['HostIp'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ExpId'])) {
            $model->expId = $map['ExpId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
