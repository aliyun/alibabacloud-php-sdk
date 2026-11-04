<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody\instance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody\instance\phoneNumbers\phoneNumber;

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
        if (\is_array($this->phoneNumber)) {
            Model::validateArray($this->phoneNumber);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->phoneNumber) {
            if (\is_array($this->phoneNumber)) {
                $res['PhoneNumber'] = [];
                $n1 = 0;
                foreach ($this->phoneNumber as $item1) {
                    $res['PhoneNumber'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PhoneNumber'])) {
            if (!empty($map['PhoneNumber'])) {
                $model->phoneNumber = [];
                $n1 = 0;
                foreach ($map['PhoneNumber'] as $item1) {
                    $model->phoneNumber[$n1] = phoneNumber::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
