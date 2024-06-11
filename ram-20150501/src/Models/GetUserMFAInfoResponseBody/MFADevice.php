<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetUserMFAInfoResponseBody;

use AlibabaCloud\Tea\Model;

class MFADevice extends Model
{
    /**
     * @description The serial number of the MFA device.
     *
     * @example acs:ram::177242285274****:mfa/test
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description The type of the MFA device. Valid values:
     *
     *   VMFA: virtual MFA device
     *   U2F: Universal 2nd Factor (U2F) security key
     *
     * @example VMFA
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'serialNumber' => 'SerialNumber',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MFADevice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
