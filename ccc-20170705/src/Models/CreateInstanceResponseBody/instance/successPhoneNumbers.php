<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody\instance;

use AlibabaCloud\Dara\Model;

class successPhoneNumbers extends Model
{
    /**
     * @var string[]
     */
    public $successPhoneNumber;
    protected $_name = [
        'successPhoneNumber' => 'SuccessPhoneNumber',
    ];

    public function validate()
    {
        if (\is_array($this->successPhoneNumber)) {
            Model::validateArray($this->successPhoneNumber);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->successPhoneNumber) {
            if (\is_array($this->successPhoneNumber)) {
                $res['SuccessPhoneNumber'] = [];
                $n1 = 0;
                foreach ($this->successPhoneNumber as $item1) {
                    $res['SuccessPhoneNumber'][$n1] = $item1;
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
        if (isset($map['SuccessPhoneNumber'])) {
            if (!empty($map['SuccessPhoneNumber'])) {
                $model->successPhoneNumber = [];
                $n1 = 0;
                foreach ($map['SuccessPhoneNumber'] as $item1) {
                    $model->successPhoneNumber[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
