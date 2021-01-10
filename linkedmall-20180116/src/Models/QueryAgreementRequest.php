<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryAgreementRequest extends Model
{
    /**
     * @var string
     */
    public $externalAgreementNo;

    /**
     * @var string
     */
    public $merchantId;

    /**
     * @var string
     */
    public $agreementNo;
    protected $_name = [
        'externalAgreementNo' => 'ExternalAgreementNo',
        'merchantId'          => 'MerchantId',
        'agreementNo'         => 'AgreementNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalAgreementNo) {
            $res['ExternalAgreementNo'] = $this->externalAgreementNo;
        }
        if (null !== $this->merchantId) {
            $res['MerchantId'] = $this->merchantId;
        }
        if (null !== $this->agreementNo) {
            $res['AgreementNo'] = $this->agreementNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAgreementRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalAgreementNo'])) {
            $model->externalAgreementNo = $map['ExternalAgreementNo'];
        }
        if (isset($map['MerchantId'])) {
            $model->merchantId = $map['MerchantId'];
        }
        if (isset($map['AgreementNo'])) {
            $model->agreementNo = $map['AgreementNo'];
        }

        return $model;
    }
}
