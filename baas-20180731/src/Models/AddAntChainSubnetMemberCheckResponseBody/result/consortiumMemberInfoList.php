<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\AddAntChainSubnetMemberCheckResponseBody\result;

use AlibabaCloud\Tea\Model;

class consortiumMemberInfoList extends Model
{
    /**
     * @var string
     */
    public $memberId;

    /**
     * @var string
     */
    public $memberName;
    protected $_name = [
        'memberId'   => 'MemberId',
        'memberName' => 'MemberName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consortiumMemberInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }

        return $model;
    }
}
