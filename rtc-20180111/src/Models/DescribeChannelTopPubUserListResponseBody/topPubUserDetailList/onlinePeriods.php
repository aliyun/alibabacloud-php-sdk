<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelTopPubUserListResponseBody\topPubUserDetailList;

use AlibabaCloud\Dara\Model;

class onlinePeriods extends Model
{
    /**
     * @var int
     */
    public $joinTs;
    /**
     * @var int
     */
    public $leaveTs;
    protected $_name = [
        'joinTs'  => 'JoinTs',
        'leaveTs' => 'LeaveTs',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->joinTs) {
            $res['JoinTs'] = $this->joinTs;
        }

        if (null !== $this->leaveTs) {
            $res['LeaveTs'] = $this->leaveTs;
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
        if (isset($map['JoinTs'])) {
            $model->joinTs = $map['JoinTs'];
        }

        if (isset($map['LeaveTs'])) {
            $model->leaveTs = $map['LeaveTs'];
        }

        return $model;
    }
}
