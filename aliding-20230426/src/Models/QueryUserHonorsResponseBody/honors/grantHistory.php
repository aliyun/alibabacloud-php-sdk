<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryUserHonorsResponseBody\honors;

use AlibabaCloud\Tea\Model;

class grantHistory extends Model
{
    /**
     * @example 12312312312312312
     *
     * @var int
     */
    public $grantTime;

    /**
     * @example 363784
     *
     * @var string
     */
    public $senderUserid;
    protected $_name = [
        'grantTime'    => 'grantTime',
        'senderUserid' => 'senderUserid',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return grantHistory
     */
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
