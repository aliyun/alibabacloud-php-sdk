<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20210609\Models\GetPartnerByUidResponseBody\data;

use AlibabaCloud\Tea\Model;

class agreementPropertyRoleDTOList extends Model
{
    /**
     * @var string
     */
    public $agreementCode;
    protected $_name = [
        'agreementCode' => 'AgreementCode',
    ];

    public function validate()
    {
    }

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
     * @return agreementPropertyRoleDTOList
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
