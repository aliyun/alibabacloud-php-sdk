<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponseBody\describePolicyGroups;

use AlibabaCloud\Tea\Model;

class usbSupplyRedirectRule extends Model
{
    /**
     * @description The rule description.
     *
     * @example Test
     *
     * @var string
     */
    public $description;

    /**
     * @description The device class. This parameter is required when `usbRuleType` is set to 1. For more information, see [Defined Class Codes](https://www.usb.org/defined-class-codes).
     *
     * @example 0Eh
     *
     * @var string
     */
    public $deviceClass;

    /**
     * @description The subclass of the device. This parameter is required when `usbRuleType` is set to 1. For more information, see [Defined Class Codes](https://www.usb.org/defined-class-codes).
     *
     * @example xxh
     *
     * @var string
     */
    public $deviceSubclass;

    /**
     * @description The product ID.
     *
     * @example 08**
     *
     * @var string
     */
    public $productId;

    /**
     * @description Indicates whether USB redirection is allowed.
     *
     * Valid values:
     *
     *   1: allowed
     *   2: not allowed
     *
     * @example 1
     *
     * @var int
     */
    public $usbRedirectType;

    /**
     * @description The type of the USB redirection rule.
     *
     * Valid values:
     *
     *   1: by device class
     *   2: by device vendor
     *
     * @example 1
     *
     * @var int
     */
    public $usbRuleType;

    /**
     * @description The vendor ID (VID). For more information, see [Valid USB VIDs](https://www.usb.org/sites/default/files/vendor_ids032322.pdf_1.pdf).
     *
     * @example 04**
     *
     * @var string
     */
    public $vendorId;
    protected $_name = [
        'description'     => 'Description',
        'deviceClass'     => 'DeviceClass',
        'deviceSubclass'  => 'DeviceSubclass',
        'productId'       => 'ProductId',
        'usbRedirectType' => 'UsbRedirectType',
        'usbRuleType'     => 'UsbRuleType',
        'vendorId'        => 'VendorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deviceClass) {
            $res['DeviceClass'] = $this->deviceClass;
        }
        if (null !== $this->deviceSubclass) {
            $res['DeviceSubclass'] = $this->deviceSubclass;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->usbRedirectType) {
            $res['UsbRedirectType'] = $this->usbRedirectType;
        }
        if (null !== $this->usbRuleType) {
            $res['UsbRuleType'] = $this->usbRuleType;
        }
        if (null !== $this->vendorId) {
            $res['VendorId'] = $this->vendorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usbSupplyRedirectRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeviceClass'])) {
            $model->deviceClass = $map['DeviceClass'];
        }
        if (isset($map['DeviceSubclass'])) {
            $model->deviceSubclass = $map['DeviceSubclass'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['UsbRedirectType'])) {
            $model->usbRedirectType = $map['UsbRedirectType'];
        }
        if (isset($map['UsbRuleType'])) {
            $model->usbRuleType = $map['UsbRuleType'];
        }
        if (isset($map['VendorId'])) {
            $model->vendorId = $map['VendorId'];
        }

        return $model;
    }
}
