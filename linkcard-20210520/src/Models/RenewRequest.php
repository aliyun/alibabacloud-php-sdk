<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class RenewRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var int
     */
    public $buyNum;

    /**
     * @var string
     */
    public $iccid;

    /**
     * @var string
     */
    public $offerCode;

    /**
     * @var string
     */
    public $rechargeType;

    /**
     * @var string
     */
    public $serialNo;
    protected $_name = [
        'apiProduct'   => 'ApiProduct',
        'apiRevision'  => 'ApiRevision',
        'buyNum'       => 'BuyNum',
        'iccid'        => 'Iccid',
        'offerCode'    => 'OfferCode',
        'rechargeType' => 'RechargeType',
        'serialNo'     => 'SerialNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->buyNum) {
            $res['BuyNum'] = $this->buyNum;
        }
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }
        if (null !== $this->offerCode) {
            $res['OfferCode'] = $this->offerCode;
        }
        if (null !== $this->rechargeType) {
            $res['RechargeType'] = $this->rechargeType;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['BuyNum'])) {
            $model->buyNum = $map['BuyNum'];
        }
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['OfferCode'])) {
            $model->offerCode = $map['OfferCode'];
        }
        if (isset($map['RechargeType'])) {
            $model->rechargeType = $map['RechargeType'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        return $model;
    }
}
