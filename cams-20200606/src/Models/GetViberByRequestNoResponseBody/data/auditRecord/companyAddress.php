<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetViberByRequestNoResponseBody\data\auditRecord;

use AlibabaCloud\Dara\Model;

class companyAddress extends Model
{
    /**
     * @var string
     */
    public $companyAddress;

    /**
     * @var string
     */
    public $companyAddressTitle;
    protected $_name = [
        'companyAddress' => 'CompanyAddress',
        'companyAddressTitle' => 'CompanyAddressTitle',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->companyAddress) {
            $res['CompanyAddress'] = $this->companyAddress;
        }

        if (null !== $this->companyAddressTitle) {
            $res['CompanyAddressTitle'] = $this->companyAddressTitle;
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
        if (isset($map['CompanyAddress'])) {
            $model->companyAddress = $map['CompanyAddress'];
        }

        if (isset($map['CompanyAddressTitle'])) {
            $model->companyAddressTitle = $map['CompanyAddressTitle'];
        }

        return $model;
    }
}
