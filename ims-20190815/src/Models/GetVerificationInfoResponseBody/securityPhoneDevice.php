<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetVerificationInfoResponseBody;

use AlibabaCloud\Tea\Model;

class securityPhoneDevice extends Model
{
    /**
     * @description The international dialing code.
     *
     * @example 86
     *
     * @var string
     */
    public $areaCode;

    /**
     * @description The mobile phone number.
     *
     * @example 13900001234
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The status of the mobile phone. Valid values:
     *
     *   active: The mobile phone is activated.
     *   pending: The mobile phone is pending for activation.
     *
     * @example active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'areaCode'    => 'AreaCode',
        'phoneNumber' => 'PhoneNumber',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->areaCode) {
            $res['AreaCode'] = $this->areaCode;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityPhoneDevice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaCode'])) {
            $model->areaCode = $map['AreaCode'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
