<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateIMRobotResponseBody\alertRobot;

class CreateOrUpdateIMRobotResponseBody extends Model
{
    /**
     * @var alertRobot
     */
    public $alertRobot;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alertRobot' => 'AlertRobot',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->alertRobot) {
            $this->alertRobot->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertRobot) {
            $res['AlertRobot'] = null !== $this->alertRobot ? $this->alertRobot->toArray($noStream) : $this->alertRobot;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AlertRobot'])) {
            $model->alertRobot = alertRobot::fromMap($map['AlertRobot']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
