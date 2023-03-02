<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models;

use AlibabaCloud\Tea\Model;

class ModifyMemberRequest extends Model
{
    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @example 489973087549****
     *
     * @var string
     */
    public $bizChainId;

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
    protected $_name = [
        'apiVersion'    => 'ApiVersion',
        'bizChainId'    => 'BizChainId',
        'memberContact' => 'MemberContact',
        'memberId'      => 'MemberId',
        'memberName'    => 'MemberName',
        'memberPhone'   => 'MemberPhone',
        'memberUid'     => 'MemberUid',
        'remark'        => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }
        if (null !== $this->bizChainId) {
            $res['BizChainId'] = $this->bizChainId;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }
        if (isset($map['BizChainId'])) {
            $model->bizChainId = $map['BizChainId'];
        }
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

        return $model;
    }
}
