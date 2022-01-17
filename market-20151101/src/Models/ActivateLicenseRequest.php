<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ActivateLicenseRequest
     */
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
