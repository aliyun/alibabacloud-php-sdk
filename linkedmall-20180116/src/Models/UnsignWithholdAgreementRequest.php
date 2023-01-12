<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class UnsignWithholdAgreementRequest extends Model
{
    /**
     * @example 20******8006
     *
     * @var string
     */
    public $agreementNo;

    /**
     * @example 234******3626
     *
     * @var string
     */
    public $externalAgreementNo;

    /**
     * @example 64******721
     *
     * @var string
     */
    public $merchantId;

    /**
     * @example ""
     *
     * @var string
     */
    public $outRequestNo;
    protected $_name = [
        'agreementNo'         => 'AgreementNo',
        'externalAgreementNo' => 'ExternalAgreementNo',
        'merchantId'          => 'MerchantId',
        'outRequestNo'        => 'OutRequestNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agreementNo) {
            $res['AgreementNo'] = $this->agreementNo;
        }
        if (null !== $this->externalAgreementNo) {
            $res['ExternalAgreementNo'] = $this->externalAgreementNo;
        }
        if (null !== $this->merchantId) {
            $res['MerchantId'] = $this->merchantId;
        }
        if (null !== $this->outRequestNo) {
            $res['OutRequestNo'] = $this->outRequestNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnsignWithholdAgreementRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgreementNo'])) {
            $model->agreementNo = $map['AgreementNo'];
        }
        if (isset($map['ExternalAgreementNo'])) {
            $model->externalAgreementNo = $map['ExternalAgreementNo'];
        }
        if (isset($map['MerchantId'])) {
            $model->merchantId = $map['MerchantId'];
        }
        if (isset($map['OutRequestNo'])) {
            $model->outRequestNo = $map['OutRequestNo'];
        }

        return $model;
    }
}
