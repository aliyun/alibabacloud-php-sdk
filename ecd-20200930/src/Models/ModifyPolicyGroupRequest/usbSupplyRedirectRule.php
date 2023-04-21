<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest;

use AlibabaCloud\Tea\Model;

class usbSupplyRedirectRule extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example 0Eh
     *
     * @var string
     */
    public $deviceClass;

    /**
     * @example xxh
     *
     * @var string
     */
    public $deviceSubclass;

    /**
     * @example 08**
     *
     * @var string
     */
    public $productId;

    /**
     * @example 1
     *
     * @var int
     */
    public $usbRedirectType;

    /**
     * @example 1
     *
     * @var int
     */
    public $usbRuleType;

    /**
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
