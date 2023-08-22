<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundDetailV2ResponseBody\module;

use AlibabaCloud\Tea\Model;

class contactInfoDTO extends Model
{
    /**
     * @example 17685764353@163.com
     *
     * @var string
     */
    public $contactEmail;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @example 17685764353
     *
     * @var string
     */
    public $contactPhone;

    /**
     * @example true
     *
     * @var bool
     */
    public $sendMsgToPassenger;
    protected $_name = [
        'contactEmail'       => 'contact_email',
        'contactName'        => 'contact_name',
        'contactPhone'       => 'contact_phone',
        'sendMsgToPassenger' => 'send_msg_to_passenger',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactEmail) {
            $res['contact_email'] = $this->contactEmail;
        }
        if (null !== $this->contactName) {
            $res['contact_name'] = $this->contactName;
        }
        if (null !== $this->contactPhone) {
            $res['contact_phone'] = $this->contactPhone;
        }
        if (null !== $this->sendMsgToPassenger) {
            $res['send_msg_to_passenger'] = $this->sendMsgToPassenger;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactInfoDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contact_email'])) {
            $model->contactEmail = $map['contact_email'];
        }
        if (isset($map['contact_name'])) {
            $model->contactName = $map['contact_name'];
        }
        if (isset($map['contact_phone'])) {
            $model->contactPhone = $map['contact_phone'];
        }
        if (isset($map['send_msg_to_passenger'])) {
            $model->sendMsgToPassenger = $map['send_msg_to_passenger'];
        }

        return $model;
    }
}
