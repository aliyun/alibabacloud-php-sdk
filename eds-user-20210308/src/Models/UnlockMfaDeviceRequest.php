<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class UnlockMfaDeviceRequest extends Model
{
    /**
     * @description The address of the Active Directory (AD) workspace.
     *
     * @example welab.co.id
     *
     * @var string
     */
    public $adDomain;

    /**
     * @description The serial number of the virtual MFA device, which is a unique identifier.
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
     * @return UnlockMfaDeviceRequest
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
