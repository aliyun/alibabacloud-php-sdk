<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteIMRobotRequest extends Model
{
    /**
     * @description The ID of the IM chatbot.
     *
     * @example 123
     *
     * @var int
     */
    public $robotId;
    protected $_name = [
        'robotId' => 'RobotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->robotId) {
            $res['RobotId'] = $this->robotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteIMRobotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RobotId'])) {
            $model->robotId = $map['RobotId'];
        }

        return $model;
    }
}
