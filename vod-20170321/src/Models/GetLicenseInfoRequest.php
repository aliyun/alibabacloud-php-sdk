<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetLicenseInfoRequest extends Model
{
    /**
     * @var string
     */
    public $licenseId;
    protected $_name = [
        'licenseId' => 'LicenseId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->licenseId) {
            $res['LicenseId'] = $this->licenseId;
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
        if (isset($map['LicenseId'])) {
            $model->licenseId = $map['LicenseId'];
        }

        return $model;
    }
}
