<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberStatusForVoiceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The basic carrier who assigns the phone number. If the queried phone number involves mobile number portability, the carrier after mobile number portability is returned. Valid values:
     *
     *   **CMCC**: China Mobile
     *   **CUCC**: China Unicom
     *   **CTCC**: China Telecom
     *
     * >  You are not allowed to query the phone numbers assigned by China Broadnet.
     * @example CTCC
     *
     * @var string
     */
    public $carrier;

    /**
     * @description The returned status for the queried phone number. Valid values:
     *
     *   **NORMAL**: The queried phone number can be reached.
     *   **SHUTDOWN**: The queried phone number is suspended.
     *   **POWER_OFF**: The phone is powered off.
     *   **NOT_EXIST**: The queried phone number is a nonexistent number.
     *   **SUSPECTED_POWER_OFF**: The phone is suspected to be powered off.
     *   **DEFECT**: The queried phone number is invalid.
     *   **UNKNOWN**: The queried phone number is unknown.
     *
     * >  Due to system adjustment of the carrier, the BUSY, SUSPECTED_POWER_OFF, and POWER_OFF states cannot be returned for the numbers assigned by China Telecom. [For more information, see the official announcements](https://help.aliyun.com/document_detail/2489709.html).
     * @example NORMAL
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'carrier' => 'Carrier',
        'status'  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carrier) {
            $res['Carrier'] = $this->carrier;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Carrier'])) {
            $model->carrier = $map['Carrier'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
