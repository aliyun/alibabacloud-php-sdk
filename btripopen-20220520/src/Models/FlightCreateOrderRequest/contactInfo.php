<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderRequest;

use AlibabaCloud\Tea\Model;

class contactInfo extends Model
{
    /**
     * @example ******@alibaba-inc.com
     *
     * @var string
     */
    public $contactEmail;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @example 12312345211
     *
     * @var string
     */
    public $contactPhone;
    protected $_name = [
        'contactEmail' => 'contact_email',
        'contactName'  => 'contact_name',
        'contactPhone' => 'contact_phone',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactInfo
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

        return $model;
    }
}
