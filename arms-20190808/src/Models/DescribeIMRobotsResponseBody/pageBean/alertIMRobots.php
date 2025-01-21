<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeIMRobotsResponseBody\pageBean;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeIMRobotsResponseBody\pageBean\alertIMRobots\dispatchRules;

class alertIMRobots extends Model
{
    /**
     * @var string
     */
    public $createTime;
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
    public $dingSignKey;
    /**
     * @var dispatchRules[]
     */
    public $dispatchRules;
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
        'createTime'    => 'CreateTime',
        'dailyNoc'      => 'DailyNoc',
        'dailyNocTime'  => 'DailyNocTime',
        'dingSignKey'   => 'DingSignKey',
        'dispatchRules' => 'DispatchRules',
        'robotAddr'     => 'RobotAddr',
        'robotId'       => 'RobotId',
        'robotName'     => 'RobotName',
        'type'          => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->dispatchRules)) {
            Model::validateArray($this->dispatchRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dailyNoc) {
            $res['DailyNoc'] = $this->dailyNoc;
        }

        if (null !== $this->dailyNocTime) {
            $res['DailyNocTime'] = $this->dailyNocTime;
        }

        if (null !== $this->dingSignKey) {
            $res['DingSignKey'] = $this->dingSignKey;
        }

        if (null !== $this->dispatchRules) {
            if (\is_array($this->dispatchRules)) {
                $res['DispatchRules'] = [];
                $n1                   = 0;
                foreach ($this->dispatchRules as $item1) {
                    $res['DispatchRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DailyNoc'])) {
            $model->dailyNoc = $map['DailyNoc'];
        }

        if (isset($map['DailyNocTime'])) {
            $model->dailyNocTime = $map['DailyNocTime'];
        }

        if (isset($map['DingSignKey'])) {
            $model->dingSignKey = $map['DingSignKey'];
        }

        if (isset($map['DispatchRules'])) {
            if (!empty($map['DispatchRules'])) {
                $model->dispatchRules = [];
                $n1                   = 0;
                foreach ($map['DispatchRules'] as $item1) {
                    $model->dispatchRules[$n1++] = dispatchRules::fromMap($item1);
                }
            }
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
