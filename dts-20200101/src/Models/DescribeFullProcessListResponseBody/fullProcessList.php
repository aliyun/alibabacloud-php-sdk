<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeFullProcessListResponseBody;

use AlibabaCloud\Dara\Model;

class fullProcessList extends Model
{
    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $exception;

    /**
     * @var string
     */
    public $processName;

    /**
     * @var string
     */
    public $processType;

    /**
     * @var string
     */
    public $runningSQL;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $taskID;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'detail' => 'Detail',
        'exception' => 'Exception',
        'processName' => 'ProcessName',
        'processType' => 'ProcessType',
        'runningSQL' => 'RunningSQL',
        'state' => 'State',
        'taskID' => 'TaskID',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->exception) {
            $res['Exception'] = $this->exception;
        }

        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }

        if (null !== $this->processType) {
            $res['ProcessType'] = $this->processType;
        }

        if (null !== $this->runningSQL) {
            $res['RunningSQL'] = $this->runningSQL;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->taskID) {
            $res['TaskID'] = $this->taskID;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['Exception'])) {
            $model->exception = $map['Exception'];
        }

        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }

        if (isset($map['ProcessType'])) {
            $model->processType = $map['ProcessType'];
        }

        if (isset($map['RunningSQL'])) {
            $model->runningSQL = $map['RunningSQL'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TaskID'])) {
            $model->taskID = $map['TaskID'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
