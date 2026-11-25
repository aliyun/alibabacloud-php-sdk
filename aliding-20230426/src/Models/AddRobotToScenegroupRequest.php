<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class AddRobotToScenegroupRequest extends Model
{
    /**
     * @var string
     */
    public $openConversationId;

    /**
     * @var string
     */
    public $robotCode;
    protected $_name = [
        'openConversationId' => 'OpenConversationId',
        'robotCode' => 'RobotCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->openConversationId) {
            $res['OpenConversationId'] = $this->openConversationId;
        }

        if (null !== $this->robotCode) {
            $res['RobotCode'] = $this->robotCode;
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
        if (isset($map['OpenConversationId'])) {
            $model->openConversationId = $map['OpenConversationId'];
        }

        if (isset($map['RobotCode'])) {
            $model->robotCode = $map['RobotCode'];
        }

        return $model;
    }
}
