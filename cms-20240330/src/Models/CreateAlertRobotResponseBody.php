<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class CreateAlertRobotResponseBody extends Model
{
    /**
     * @var string
     */
    public $alertRobotId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alertRobotId' => 'alertRobotId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertRobotId) {
            $res['alertRobotId'] = $this->alertRobotId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['alertRobotId'])) {
            $model->alertRobotId = $map['alertRobotId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
