<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models\ListPSMemberDataTypeCodeResponseBody\data;

use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @example E***
     *
     * @var string
     */
    public $dataTypeCode;

    /**
     * @example 717534457003****
     *
     * @var string
     */
    public $memberId;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @example 19720316234381****
     *
     * @var string
     */
    public $memberUid;
    protected $_name = [
        'dataTypeCode' => 'DataTypeCode',
        'memberId'     => 'MemberId',
        'memberName'   => 'MemberName',
        'memberUid'    => 'MemberUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataTypeCode) {
            $res['DataTypeCode'] = $this->dataTypeCode;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataTypeCode'])) {
            $model->dataTypeCode = $map['DataTypeCode'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        return $model;
    }
}
