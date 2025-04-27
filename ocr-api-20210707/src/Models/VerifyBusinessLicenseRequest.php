<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Dara\Model;

class VerifyBusinessLicenseRequest extends Model
{
    /**
     * @var string
     */
    public $companyName;

    /**
     * @var string
     */
    public $creditCode;

    /**
     * @var string
     */
    public $legalPerson;
    protected $_name = [
        'companyName' => 'CompanyName',
        'creditCode' => 'CreditCode',
        'legalPerson' => 'LegalPerson',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }

        if (null !== $this->creditCode) {
            $res['CreditCode'] = $this->creditCode;
        }

        if (null !== $this->legalPerson) {
            $res['LegalPerson'] = $this->legalPerson;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }

        if (isset($map['CreditCode'])) {
            $model->creditCode = $map['CreditCode'];
        }

        if (isset($map['LegalPerson'])) {
            $model->legalPerson = $map['LegalPerson'];
        }

        return $model;
    }
}
