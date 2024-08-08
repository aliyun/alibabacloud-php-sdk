<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417\Models\MemberAccountDetailPageQueryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100
     *
     * @var string
     */
    public $accountBalance;

    /**
     * @example 20
     *
     * @var int
     */
    public $accountType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $activityType;

    /**
     * @var string
     */
    public $channelCode;

    /**
     * @example 20
     *
     * @var string
     */
    public $detailValue;

    /**
     * @description This parameter is required.
     *
     * @example ...
     *
     * @var string
     */
    public $extra;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 750cff00c3e0996d220ac2861dafdfadsf
     *
     * @var string
     */
    public $openMerchantId;

    /**
     * @example 1
     *
     * @var string
     */
    public $operateType;

    /**
     * @example MEMBER_fc498a12edd84dafd
     *
     * @var string
     */
    public $outerMemberId;

    /**
     * @example ...
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'accountBalance' => 'AccountBalance',
        'accountType'    => 'AccountType',
        'activityType'   => 'ActivityType',
        'channelCode'    => 'ChannelCode',
        'detailValue'    => 'DetailValue',
        'extra'          => 'Extra',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
        'openMerchantId' => 'OpenMerchantId',
        'operateType'    => 'OperateType',
        'outerMemberId'  => 'OuterMemberId',
        'remark'         => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountBalance) {
            $res['AccountBalance'] = $this->accountBalance;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->activityType) {
            $res['ActivityType'] = $this->activityType;
        }
        if (null !== $this->channelCode) {
            $res['ChannelCode'] = $this->channelCode;
        }
        if (null !== $this->detailValue) {
            $res['DetailValue'] = $this->detailValue;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->openMerchantId) {
            $res['OpenMerchantId'] = $this->openMerchantId;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->outerMemberId) {
            $res['OuterMemberId'] = $this->outerMemberId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountBalance'])) {
            $model->accountBalance = $map['AccountBalance'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['ActivityType'])) {
            $model->activityType = $map['ActivityType'];
        }
        if (isset($map['ChannelCode'])) {
            $model->channelCode = $map['ChannelCode'];
        }
        if (isset($map['DetailValue'])) {
            $model->detailValue = $map['DetailValue'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['OpenMerchantId'])) {
            $model->openMerchantId = $map['OpenMerchantId'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['OuterMemberId'])) {
            $model->outerMemberId = $map['OuterMemberId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
