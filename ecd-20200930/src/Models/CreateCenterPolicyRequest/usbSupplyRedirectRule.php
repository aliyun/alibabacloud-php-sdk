<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCenterPolicyRequest;

use AlibabaCloud\Tea\Model;

class usbSupplyRedirectRule extends Model
{
    /**
     * @description The rule description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The product ID (PID).
     *
     * @example 08**
     *
     * @var string
     */
    public $productId;

    /**
     * @description Specifies whether to allow USB redirection.
     *
     * Valid values:
     *
     *   1: allows USB redirection.
     *   2: forbids USB redirection.
     *
     * @example 1
     *
     * @var string
     */
    public $usbRedirectType;

    /**
     * @description The type of the USB redirection rule.
     *
     * Valid values:
     *
     *   2: enables USB redirection based on products.
     *
     * @example 2
     *
     * @var string
     */
    public $usbRuleType;

    /**
     * @description The vendor ID (VID). For more information, see [Valid USB Vendor IDs (VIDs)](https://www.usb.org/sites/default/files/vendor_ids032322.pdf_1.pdf).
     *
     * @example 04**
     *
     * @var string
     */
    public $vendorId;
    protected $_name = [
        'description' => 'Description',
        'productId' => 'ProductId',
        'usbRedirectType' => 'UsbRedirectType',
        'usbRuleType' => 'UsbRuleType',
        'vendorId' => 'VendorId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
