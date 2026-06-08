<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetProcessInstanceResponseBody\processInstance\approvalTasks;

use AlibabaCloud\Dara\Model;

class taskCandidates extends Model
{
    /**
     * @var string
     */
    public $memberName;

    /**
     * @var string
     */
    public $memberUserId;
    protected $_name = [
        'memberName' => 'MemberName',
        'memberUserId' => 'MemberUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }

        if (null !== $this->memberUserId) {
            $res['MemberUserId'] = $this->memberUserId;
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
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }

        if (isset($map['MemberUserId'])) {
            $model->memberUserId = $map['MemberUserId'];
        }

        return $model;
    }
}
