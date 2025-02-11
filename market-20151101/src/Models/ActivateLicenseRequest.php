<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Dara\Model;

class ActivateLicenseRequest extends Model
{
    /**
     * @var string
     */
    public $identification;
    /**
     * @var string
     */
    public $licenseCode;
    protected $_name = [
        'identification' => 'Identification',
        'licenseCode'    => 'LicenseCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identification) {
            $res['Identification'] = $this->identification;
        }

        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
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
        if (isset($map['Identification'])) {
            $model->identification = $map['Identification'];
        }

        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }

        return $model;
    }
}
