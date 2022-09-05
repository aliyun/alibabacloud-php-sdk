<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeIMRobotsResponseBody\pageBean;

use AlibabaCloud\Tea\Model;

class alertIMRobots extends Model
{
    /**
     * @var bool
     */
    public $dailyNoc;

    /**
     * @var string
     */
    public $dailyNocTime;

    /**
     * @var string
     */
    public $robotAddr;

    /**
     * @var float
     */
    public $robotId;

    /**
     * @var string
     */
    public $robotName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dailyNoc'     => 'DailyNoc',
        'dailyNocTime' => 'DailyNocTime',
        'robotAddr'    => 'RobotAddr',
        'robotId'      => 'RobotId',
        'robotName'    => 'RobotName',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dailyNoc) {
            $res['DailyNoc'] = $this->dailyNoc;
        }
        if (null !== $this->dailyNocTime) {
            $res['DailyNocTime'] = $this->dailyNocTime;
        }
        if (null !== $this->robotAddr) {
            $res['RobotAddr'] = $this->robotAddr;
        }
        if (null !== $this->robotId) {
            $res['RobotId'] = $this->robotId;
        }
        if (null !== $this->robotName) {
            $res['RobotName'] = $this->robotName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertIMRobots
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DailyNoc'])) {
            $model->dailyNoc = $map['DailyNoc'];
        }
        if (isset($map['DailyNocTime'])) {
            $model->dailyNocTime = $map['DailyNocTime'];
        }
        if (isset($map['RobotAddr'])) {
            $model->robotAddr = $map['RobotAddr'];
        }
        if (isset($map['RobotId'])) {
            $model->robotId = $map['RobotId'];
        }
        if (isset($map['RobotName'])) {
            $model->robotName = $map['RobotName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
