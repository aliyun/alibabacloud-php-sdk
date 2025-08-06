<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class RenewAppLicenseRequest extends Model
{
    /**
     * @var string
     */
    public $licenseItemIds;

    /**
     * @var string
     */
    public $orderIds;

    /**
     * @var string
     */
    public $purchaseMethod;
    protected $_name = [
        'licenseItemIds' => 'LicenseItemIds',
        'orderIds' => 'OrderIds',
        'purchaseMethod' => 'PurchaseMethod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->licenseItemIds) {
            $res['LicenseItemIds'] = $this->licenseItemIds;
        }

        if (null !== $this->orderIds) {
            $res['OrderIds'] = $this->orderIds;
        }

        if (null !== $this->purchaseMethod) {
            $res['PurchaseMethod'] = $this->purchaseMethod;
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
        if (isset($map['LicenseItemIds'])) {
            $model->licenseItemIds = $map['LicenseItemIds'];
        }

        if (isset($map['OrderIds'])) {
            $model->orderIds = $map['OrderIds'];
        }

        if (isset($map['PurchaseMethod'])) {
            $model->purchaseMethod = $map['PurchaseMethod'];
        }

        return $model;
    }
}
