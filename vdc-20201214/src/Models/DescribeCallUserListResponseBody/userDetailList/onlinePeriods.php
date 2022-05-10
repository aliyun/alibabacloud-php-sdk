<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeCallUserListResponseBody\userDetailList;

use AlibabaCloud\Tea\Model;

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
