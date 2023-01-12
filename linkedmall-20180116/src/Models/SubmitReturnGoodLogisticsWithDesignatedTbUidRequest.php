<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class SubmitReturnGoodLogisticsWithDesignatedTbUidRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $cpCode;

    /**
     * @var int
     */
    public $disputeId;

    /**
     * @var string
     */
    public $logisticsNo;

    /**
     * @var string
     */
    public $subLmOrderId;

    /**
     * @var string
     */
    public $tbAccountType;

    /**
     * @var int
     */
    public $tbUserId;

    /**
     * @var string
     */
    public $thirdPartyUserId;
    protected $_name = [
        'bizId'            => 'BizId',
        'cpCode'           => 'CpCode',
        'disputeId'        => 'DisputeId',
        'logisticsNo'      => 'LogisticsNo',
        'subLmOrderId'     => 'SubLmOrderId',
        'tbAccountType'    => 'TbAccountType',
        'tbUserId'         => 'TbUserId',
        'thirdPartyUserId' => 'ThirdPartyUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->cpCode) {
            $res['CpCode'] = $this->cpCode;
        }
        if (null !== $this->disputeId) {
            $res['DisputeId'] = $this->disputeId;
        }
        if (null !== $this->logisticsNo) {
            $res['LogisticsNo'] = $this->logisticsNo;
        }
        if (null !== $this->subLmOrderId) {
            $res['SubLmOrderId'] = $this->subLmOrderId;
        }
        if (null !== $this->tbAccountType) {
            $res['TbAccountType'] = $this->tbAccountType;
        }
        if (null !== $this->tbUserId) {
            $res['TbUserId'] = $this->tbUserId;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitReturnGoodLogisticsWithDesignatedTbUidRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CpCode'])) {
            $model->cpCode = $map['CpCode'];
        }
        if (isset($map['DisputeId'])) {
            $model->disputeId = $map['DisputeId'];
        }
        if (isset($map['LogisticsNo'])) {
            $model->logisticsNo = $map['LogisticsNo'];
        }
        if (isset($map['SubLmOrderId'])) {
            $model->subLmOrderId = $map['SubLmOrderId'];
        }
        if (isset($map['TbAccountType'])) {
            $model->tbAccountType = $map['TbAccountType'];
        }
        if (isset($map['TbUserId'])) {
            $model->tbUserId = $map['TbUserId'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }

        return $model;
    }
}
