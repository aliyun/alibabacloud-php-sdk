<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeChannelTopPubUserListResponseBody\topPubUserDetailList;

use AlibabaCloud\Tea\Model;

class onlinePeriods extends Model
{
    /**
     * @description 加入通话时间，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $joinTs;

    /**
     * @description 离开通话时间，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $leaveTs;
    protected $_name = [
        'joinTs'  => 'JoinTs',
        'leaveTs' => 'LeaveTs',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return onlinePeriods
     */
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
