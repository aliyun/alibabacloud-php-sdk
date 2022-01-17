<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLicenseRequest extends Model
{
    /**
     * @var string
     */
    public $licenseCode;
    protected $_name = [
        'licenseCode' => 'LicenseCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLicenseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }

        return $model;
    }
}
