<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class UpdateAntChainMemberRequest extends Model
{
    /**
     * @example AroN3X2l
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @example 1287126353301234
     *
     * @var string
     */
    public $memberId;

    /**
     * @example updatename
     *
     * @var string
     */
    public $memberName;
    protected $_name = [
        'consortiumId' => 'ConsortiumId',
        'memberId'     => 'MemberId',
        'memberName'   => 'MemberName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
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
     * @return UpdateAntChainMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }

        return $model;
    }
}
