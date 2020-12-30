<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListInstancesOfUserResponseBody\instances\callCenterInstance;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListInstancesOfUserResponseBody\instances\callCenterInstance\phoneNumbers\phoneNumber;
use AlibabaCloud\Tea\Model;

class phoneNumbers extends Model
{
    /**
     * @var phoneNumber[]
     */
    public $phoneNumber;
    protected $_name = [
        'phoneNumber' => 'PhoneNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = [];
            if (null !== $this->phoneNumber && \is_array($this->phoneNumber)) {
                $n = 0;
                foreach ($this->phoneNumber as $item) {
                    $res['PhoneNumber'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return phoneNumbers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhoneNumber'])) {
            if (!empty($map['PhoneNumber'])) {
                $model->phoneNumber = [];
                $n                  = 0;
                foreach ($map['PhoneNumber'] as $item) {
                    $model->phoneNumber[$n++] = null !== $item ? phoneNumber::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
