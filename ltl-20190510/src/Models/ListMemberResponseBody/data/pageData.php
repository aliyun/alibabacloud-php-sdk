<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models\ListMemberResponseBody\data;

use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @var string
     */
    public $memberContact;

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
     * @example 1381111****
     *
     * @var string
     */
    public $memberPhone;

    /**
     * @example 19720316234381****
     *
     * @var string
     */
    public $memberUid;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example UNLOCK
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'memberContact' => 'MemberContact',
        'memberId'      => 'MemberId',
        'memberName'    => 'MemberName',
        'memberPhone'   => 'MemberPhone',
        'memberUid'     => 'MemberUid',
        'remark'        => 'Remark',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberContact) {
            $res['MemberContact'] = $this->memberContact;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }
        if (null !== $this->memberPhone) {
            $res['MemberPhone'] = $this->memberPhone;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['MemberContact'])) {
            $model->memberContact = $map['MemberContact'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }
        if (isset($map['MemberPhone'])) {
            $model->memberPhone = $map['MemberPhone'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
