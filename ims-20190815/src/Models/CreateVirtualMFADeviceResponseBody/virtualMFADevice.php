<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\CreateVirtualMFADeviceResponseBody;

use AlibabaCloud\Tea\Model;

class virtualMFADevice extends Model
{
    /**
     * @description The key of the MFA device.
     *
     * @example LD3CJ23Z2VGEX6R7ZTQCOA4XL2KODS5PKH7442NLKYX2PVHSHYB7UT3TS5HA****
     *
     * @var string
     */
    public $base32StringSeed;

    /**
     * @description The Base64-encoded QR code of the key.
     *
     * @example YXNkZmFzZDlmeW5hc2Q5OGZoODd4bXJmcThhaGU5aSBmYXNkZiBzYWRmIGFGIDRxd2VjIGEgdHEz****
     *
     * @var string
     */
    public $QRCodePNG;

    /**
     * @description The serial number of the MFA device.
     *
     * @example acs:ram::177242285274****:mfa/device001
     *
     * @var string
     */
    public $serialNumber;
    protected $_name = [
        'base32StringSeed' => 'Base32StringSeed',
        'QRCodePNG'        => 'QRCodePNG',
        'serialNumber'     => 'SerialNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->base32StringSeed) {
            $res['Base32StringSeed'] = $this->base32StringSeed;
        }
        if (null !== $this->QRCodePNG) {
            $res['QRCodePNG'] = $this->QRCodePNG;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return virtualMFADevice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Base32StringSeed'])) {
            $model->base32StringSeed = $map['Base32StringSeed'];
        }
        if (isset($map['QRCodePNG'])) {
            $model->QRCodePNG = $map['QRCodePNG'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }

        return $model;
    }
}
