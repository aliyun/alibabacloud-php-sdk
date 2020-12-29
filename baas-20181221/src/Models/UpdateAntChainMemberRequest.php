<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class UpdateAntChainMemberRequest extends Model
{
    /**
     * @var string
     */
    public $memberName;

    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var string
     */
    public $memberId;
    protected $_name = [
        'memberName'   => 'MemberName',
        'consortiumId' => 'ConsortiumId',
        'memberId'     => 'MemberId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAntChainMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }

        return $model;
    }
}
