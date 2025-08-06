<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DeleteAppLicenseRequest extends Model
{
    /**
     * @var string
     */
    public $appItemId;

    /**
     * @var string
     */
    public $licenseItemIds;
    protected $_name = [
        'appItemId' => 'AppItemId',
        'licenseItemIds' => 'LicenseItemIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appItemId) {
            $res['AppItemId'] = $this->appItemId;
        }

        if (null !== $this->licenseItemIds) {
            $res['LicenseItemIds'] = $this->licenseItemIds;
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
        if (isset($map['AppItemId'])) {
            $model->appItemId = $map['AppItemId'];
        }

        if (isset($map['LicenseItemIds'])) {
            $model->licenseItemIds = $map['LicenseItemIds'];
        }

        return $model;
    }
}
