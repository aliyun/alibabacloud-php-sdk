<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class LockMfaDeviceRequest extends Model
{
    /**
     * @description The domain of the Active Directory (AD) workspace.
     *
     * @example pg-jifenn.com
     *
     * @var string
     */
    public $adDomain;

    /**
     * @description The serial number of the virtual MFA device. The serial number is unique for each device.
     *
     * @example dc856334-446b-4035-bfbc-18af261e****
     *
     * @var string
     */
    public $serialNumber;
    protected $_name = [
        'adDomain'     => 'AdDomain',
        'serialNumber' => 'SerialNumber',
    ];

    public function validate()
    {
    }

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
     * @return LockMfaDeviceRequest
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
