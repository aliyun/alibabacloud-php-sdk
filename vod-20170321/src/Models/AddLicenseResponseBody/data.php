<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\AddLicenseResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
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
     * @var string
     */
    public $itemId;

    /**
     * @var int
     */
    public $licenseId;

    /**
     * @var string
     */
    public $sdkType;
    protected $_name = [
        'appItemId' => 'AppItemId',
        'businessType' => 'BusinessType',
        'itemId' => 'ItemId',
        'licenseId' => 'LicenseId',
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

        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->licenseId) {
            $res['LicenseId'] = $this->licenseId;
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

        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        if (isset($map['LicenseId'])) {
            $model->licenseId = $map['LicenseId'];
        }

        if (isset($map['SdkType'])) {
            $model->sdkType = $map['SdkType'];
        }

        return $model;
    }
}
