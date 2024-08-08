<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417\Models\QueryMemberBasicInfoRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $channelCode;

    /**
     * @var string
     */
    public $channelOpenId;

    /**
     * @example 18888889999
     *
     * @var string
     */
    public $mobile;

    /**
     * @description This parameter is required.
     *
     * @example 750cff00c3e0996d220ac2861dafdfadsf
     *
     * @var string
     */
    public $openMerchantId;

    /**
     * @example WMS_36606164948078_23218019
     *
     * @var string
     */
    public $outerMemberId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $platFormType;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'channelCode'    => 'ChannelCode',
        'channelOpenId'  => 'ChannelOpenId',
        'mobile'         => 'Mobile',
        'openMerchantId' => 'OpenMerchantId',
        'outerMemberId'  => 'OuterMemberId',
        'platFormType'   => 'PlatFormType',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelCode) {
            $res['ChannelCode'] = $this->channelCode;
        }
        if (null !== $this->channelOpenId) {
            $res['ChannelOpenId'] = $this->channelOpenId;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->openMerchantId) {
            $res['OpenMerchantId'] = $this->openMerchantId;
        }
        if (null !== $this->outerMemberId) {
            $res['OuterMemberId'] = $this->outerMemberId;
        }
        if (null !== $this->platFormType) {
            $res['PlatFormType'] = $this->platFormType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelCode'])) {
            $model->channelCode = $map['ChannelCode'];
        }
        if (isset($map['ChannelOpenId'])) {
            $model->channelOpenId = $map['ChannelOpenId'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['OpenMerchantId'])) {
            $model->openMerchantId = $map['OpenMerchantId'];
        }
        if (isset($map['OuterMemberId'])) {
            $model->outerMemberId = $map['OuterMemberId'];
        }
        if (isset($map['PlatFormType'])) {
            $model->platFormType = $map['PlatFormType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
