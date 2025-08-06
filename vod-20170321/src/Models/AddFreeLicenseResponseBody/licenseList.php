<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\AddFreeLicenseResponseBody;

use AlibabaCloud\Dara\Model;

class licenseList extends Model
{
    /**
     * @var string
     */
    public $appItemId;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var int
     */
    public $licenseId;

    /**
     * @var string
     */
    public $licenseItemId;

    /**
     * @var string
     */
    public $sdkType;
    protected $_name = [
        'appItemId' => 'AppItemId',
        'businessType' => 'BusinessType',
        'licenseId' => 'LicenseId',
        'licenseItemId' => 'LicenseItemId',
        'sdkType' => 'SdkType',
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

        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->licenseId) {
            $res['LicenseId'] = $this->licenseId;
        }

        if (null !== $this->licenseItemId) {
            $res['LicenseItemId'] = $this->licenseItemId;
        }

        if (null !== $this->sdkType) {
            $res['SdkType'] = $this->sdkType;
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

        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['LicenseId'])) {
            $model->licenseId = $map['LicenseId'];
        }

        if (isset($map['LicenseItemId'])) {
            $model->licenseItemId = $map['LicenseItemId'];
        }

        if (isset($map['SdkType'])) {
            $model->sdkType = $map['SdkType'];
        }

        return $model;
    }
}
