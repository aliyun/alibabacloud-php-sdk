<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateIMRobotRequest extends Model
{
    /**
     * @var string
     */
    public $cardTemplate;

    /**
     * @var bool
     */
    public $dailyNoc;

    /**
     * @var string
     */
    public $dailyNocTime;

    /**
     * @var bool
     */
    public $enableOutgoing;

    /**
     * @var string
     */
    public $robotAddress;

    /**
     * @var int
     */
    public $robotId;

    /**
     * @var string
     */
    public $robotName;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'cardTemplate'   => 'CardTemplate',
        'dailyNoc'       => 'DailyNoc',
        'dailyNocTime'   => 'DailyNocTime',
        'enableOutgoing' => 'EnableOutgoing',
        'robotAddress'   => 'RobotAddress',
        'robotId'        => 'RobotId',
        'robotName'      => 'RobotName',
        'token'          => 'Token',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardTemplate) {
            $res['CardTemplate'] = $this->cardTemplate;
        }
        if (null !== $this->dailyNoc) {
            $res['DailyNoc'] = $this->dailyNoc;
        }
        if (null !== $this->dailyNocTime) {
            $res['DailyNocTime'] = $this->dailyNocTime;
        }
        if (null !== $this->enableOutgoing) {
            $res['EnableOutgoing'] = $this->enableOutgoing;
        }
        if (null !== $this->robotAddress) {
            $res['RobotAddress'] = $this->robotAddress;
        }
        if (null !== $this->robotId) {
            $res['RobotId'] = $this->robotId;
        }
        if (null !== $this->robotName) {
            $res['RobotName'] = $this->robotName;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateIMRobotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CardTemplate'])) {
            $model->cardTemplate = $map['CardTemplate'];
        }
        if (isset($map['DailyNoc'])) {
            $model->dailyNoc = $map['DailyNoc'];
        }
        if (isset($map['DailyNocTime'])) {
            $model->dailyNocTime = $map['DailyNocTime'];
        }
        if (isset($map['EnableOutgoing'])) {
            $model->enableOutgoing = $map['EnableOutgoing'];
        }
        if (isset($map['RobotAddress'])) {
            $model->robotAddress = $map['RobotAddress'];
        }
        if (isset($map['RobotId'])) {
            $model->robotId = $map['RobotId'];
        }
        if (isset($map['RobotName'])) {
            $model->robotName = $map['RobotName'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
