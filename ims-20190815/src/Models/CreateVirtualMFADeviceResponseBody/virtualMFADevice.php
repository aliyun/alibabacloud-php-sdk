<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\CreateVirtualMFADeviceResponseBody;

use AlibabaCloud\Dara\Model;

class virtualMFADevice extends Model
{
    /**
     * @var string
     */
    public $base32StringSeed;
    /**
     * @var string
     */
    public $QRCodePNG;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
