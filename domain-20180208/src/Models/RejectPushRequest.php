<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;

class RejectPushRequest extends Model
{
    /**
     * @var string
     */
    public $pushNo;
    protected $_name = [
        'pushNo' => 'PushNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pushNo) {
            $res['PushNo'] = $this->pushNo;
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
        if (isset($map['PushNo'])) {
            $model->pushNo = $map['PushNo'];
        }

        return $model;
    }
}
