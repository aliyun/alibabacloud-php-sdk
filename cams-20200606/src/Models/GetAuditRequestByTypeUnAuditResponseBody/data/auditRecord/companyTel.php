<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetAuditRequestByTypeUnAuditResponseBody\data\auditRecord;

use AlibabaCloud\Dara\Model;

class companyTel extends Model
{
    /**
     * @var string
     */
    public $companyTelNumber;

    /**
     * @var string
     */
    public $companyTelTitle;
    protected $_name = [
        'companyTelNumber' => 'CompanyTelNumber',
        'companyTelTitle' => 'CompanyTelTitle',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->companyTelNumber) {
            $res['CompanyTelNumber'] = $this->companyTelNumber;
        }

        if (null !== $this->companyTelTitle) {
            $res['CompanyTelTitle'] = $this->companyTelTitle;
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
        if (isset($map['CompanyTelNumber'])) {
            $model->companyTelNumber = $map['CompanyTelNumber'];
        }

        if (isset($map['CompanyTelTitle'])) {
            $model->companyTelTitle = $map['CompanyTelTitle'];
        }

        return $model;
    }
}
