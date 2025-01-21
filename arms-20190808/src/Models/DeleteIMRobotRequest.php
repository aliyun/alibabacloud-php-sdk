<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class DeleteIMRobotRequest extends Model
{
    /**
     * @var int
     */
    public $robotId;
    protected $_name = [
        'robotId' => 'RobotId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->robotId) {
            $res['RobotId'] = $this->robotId;
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
        if (isset($map['RobotId'])) {
            $model->robotId = $map['RobotId'];
        }

        return $model;
    }
}
