<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersResponseBody;

use AlibabaCloud\Dara\Model;

class userdPhoneNumbers extends Model
{
    /**
     * @var string[]
     */
    public $userdPhoneNumber;
    protected $_name = [
        'userdPhoneNumber' => 'UserdPhoneNumber',
    ];

    public function validate()
    {
        if (\is_array($this->userdPhoneNumber)) {
            Model::validateArray($this->userdPhoneNumber);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userdPhoneNumber) {
            if (\is_array($this->userdPhoneNumber)) {
                $res['UserdPhoneNumber'] = [];
                $n1 = 0;
                foreach ($this->userdPhoneNumber as $item1) {
                    $res['UserdPhoneNumber'][$n1] = $item1;
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
        if (isset($map['UserdPhoneNumber'])) {
            if (!empty($map['UserdPhoneNumber'])) {
                $model->userdPhoneNumber = [];
                $n1 = 0;
                foreach ($map['UserdPhoneNumber'] as $item1) {
                    $model->userdPhoneNumber[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
