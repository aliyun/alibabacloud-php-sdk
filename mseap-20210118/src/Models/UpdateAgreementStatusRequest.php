<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Tea\Model;

class UpdateAgreementStatusRequest extends Model
{
    /**
     * @example 10aa40008e081ad7b1fb50bffc3a70b1
     *
     * @var string
     */
    public $agreementCode;
    protected $_name = [
        'agreementCode' => 'AgreementCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agreementCode) {
            $res['AgreementCode'] = $this->agreementCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAgreementStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgreementCode'])) {
            $model->agreementCode = $map['AgreementCode'];
        }

        return $model;
    }
}
