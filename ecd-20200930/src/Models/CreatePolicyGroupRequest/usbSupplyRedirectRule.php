<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreatePolicyGroupRequest;

use AlibabaCloud\Tea\Model;

class usbSupplyRedirectRule extends Model
{
    /**
     * @description The description of the rule.
     *
     * @example Test rule
     *
     * @var string
     */
    public $description;

    /**
     * @description The class of the device. If you set the `usbRuleType` parameter to 1, you must specify this parameter. For more information, see [Defined Class Codes](https://www.usb.org/defined-class-codes).
     *
     * @example 0Eh
     *
     * @var string
     */
    public $deviceClass;

    /**
     * @description The subclass of the device. If you set the `usbRuleType` parameter to 1, you must specify this parameter. For more information, see [Defined Class Codes](https://www.usb.org/defined-class-codes).
     *
     * @example xxh
     *
     * @var string
     */
    public $deviceSubclass;

    /**
     * @description The ID of the service.
     *
     * @example 08**
     *
     * @var string
     */
    public $productId;

    /**
     * @description The type of USB redirection.
     *
     * Valid values:
     *
     *   1: allows USB redirection
     *
     * <!-- -->
     *
     *   2: forbids USB redirection
     *
     * <!-- -->
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
     *
     * <!-- -->
     *
     *   2: by device vendor
     *
     * <!-- -->
     * @example 1
     *
     * @var int
     */
    public $usbRuleType;

    /**
     * @description The ID of the vendor. For more information, see [Valid USB Vendor IDs (VIDs)](https://www.usb.org/sites/default/files/vendor_ids032322.pdf\_1.pdf).
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
