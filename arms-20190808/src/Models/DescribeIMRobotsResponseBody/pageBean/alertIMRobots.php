<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeIMRobotsResponseBody\pageBean;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeIMRobotsResponseBody\pageBean\alertIMRobots\dispatchRules;
use AlibabaCloud\Tea\Model;

class alertIMRobots extends Model
{
    /**
     * @description The time when the IM chatbot was created.
     *
     * @example 2023-01-16 17:21:48
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Indicates whether daily statistics are sent. Valid values:
     *
     *   `false` (default): Daily statistics are not sent.
     *   `true`: Daily statistics are sent.
     *
     * @example true
     *
     * @var bool
     */
    public $dailyNoc;

    /**
     * @description The point in time at which the daily statistics are sent. The information that ARMS sends at the specified points in time includes the total number of alerts generated on the current day, the number of cleared alerts, and the number of alerts to be cleared.
     *
     * @example 09:30,17:30
     *
     * @var string
     */
    public $dailyNocTime;

    /**
     * @description The signature key of DingTalk. If you specify a signature key, DingTalk authentication is performed by using the signature key. If you do not specify a signature key, a whitelist is used for authentication by default. The keyword of the whitelist is **Alert**.
     *
     * @example ******
     *
     * @var string
     */
    public $dingSignKey;

    /**
     * @description The notification policies.
     *
     * @var dispatchRules[]
     */
    public $dispatchRules;

    /**
     * @description The webhook URL of the IM chatbot.
     *
     * @example https://oapi.dingtalk.com/robot/send?access_token=e1a049121******
     *
     * @var string
     */
    public $robotAddr;

    /**
     * @description The ID of the IM chatbot.
     *
     * @example 123
     *
     * @var float
     */
    public $robotId;

    /**
     * @description The name of the IM chatbot.
     *
     * @example Chatbot name
     *
     * @var string
     */
    public $robotName;

    /**
     * @description The type of the IM chatbot. Valid values:
     *
     *   `dingding`: DingTalk chatbot
     *   `wechat`: WeCom chatbot
     *
     * @example dingding
     *
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
    }

    public function toMap()
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
            $res['DispatchRules'] = [];
            if (null !== $this->dispatchRules && \is_array($this->dispatchRules)) {
                $n = 0;
                foreach ($this->dispatchRules as $item) {
                    $res['DispatchRules'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return alertIMRobots
     */
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
                $n                    = 0;
                foreach ($map['DispatchRules'] as $item) {
                    $model->dispatchRules[$n++] = null !== $item ? dispatchRules::fromMap($item) : $item;
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
