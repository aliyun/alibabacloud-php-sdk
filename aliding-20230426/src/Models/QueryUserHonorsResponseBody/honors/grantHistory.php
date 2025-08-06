<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryUserHonorsResponseBody\honors;

use AlibabaCloud\Dara\Model;

class grantHistory extends Model
{
    /**
     * @var int
     */
    public $grantTime;

    /**
     * @var string
     */
    public $senderUserid;
    protected $_name = [
        'grantTime' => 'grantTime',
        'senderUserid' => 'senderUserid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->grantTime) {
            $res['grantTime'] = $this->grantTime;
        }

        if (null !== $this->senderUserid) {
            $res['senderUserid'] = $this->senderUserid;
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
        if (isset($map['grantTime'])) {
            $model->grantTime = $map['grantTime'];
        }

        if (isset($map['senderUserid'])) {
            $model->senderUserid = $map['senderUserid'];
        }

        return $model;
    }
}
