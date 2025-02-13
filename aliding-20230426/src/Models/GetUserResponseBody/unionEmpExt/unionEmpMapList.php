<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserResponseBody\unionEmpExt;

use AlibabaCloud\Dara\Model;

class unionEmpMapList extends Model
{
    /**
     * @var string
     */
    public $cropId;
    /**
     * @var string
     */
    public $userid;
    protected $_name = [
        'cropId' => 'cropId',
        'userid' => 'userid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cropId) {
            $res['cropId'] = $this->cropId;
        }

        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
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
        if (isset($map['cropId'])) {
            $model->cropId = $map['cropId'];
        }

        if (isset($map['userid'])) {
            $model->userid = $map['userid'];
        }

        return $model;
    }
}
