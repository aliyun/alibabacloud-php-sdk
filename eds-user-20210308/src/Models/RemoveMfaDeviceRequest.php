<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class RemoveMfaDeviceRequest extends Model
{
    /**
     * @description The domain of the Active Directory (AD) workspace.
     *
     * @example alpha.lftltd.net
     *
     * @var string
     */
    public $adDomain;

    /**
     * @description The serial number of the virtual MFA device. The serial number is unique for each device.
     *
     * This parameter is required.
     *
     * @example dc856334-446b-4035-bfbc-18af261e****
     *
     * @var string
     */
    public $serialNumber;
    protected $_name = [
        'adDomain' => 'AdDomain',
        'serialNumber' => 'SerialNumber',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->adDomain) {
            $res['AdDomain'] = $this->adDomain;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveMfaDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdDomain'])) {
            $model->adDomain = $map['AdDomain'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }

        return $model;
    }
}
