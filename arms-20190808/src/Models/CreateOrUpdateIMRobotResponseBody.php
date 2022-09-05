<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateIMRobotResponseBody\alertRobot;
use AlibabaCloud\Tea\Model;

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
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertRobot) {
            $res['AlertRobot'] = null !== $this->alertRobot ? $this->alertRobot->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateIMRobotResponseBody
     */
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
