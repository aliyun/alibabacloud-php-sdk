<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class DeleteRemindRequest extends Model
{
    /**
     * @var int
     */
    public $remindId;
    protected $_name = [
        'remindId' => 'RemindId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remindId) {
            $res['RemindId'] = $this->remindId;
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
        if (isset($map['RemindId'])) {
            $model->remindId = $map['RemindId'];
        }

        return $model;
    }
}
