<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateInstanceResponseBody\instance;

use AlibabaCloud\Dara\Model;

class failPhoneNumbers extends Model
{
    /**
     * @var string[]
     */
    public $failPhoneNumber;
    protected $_name = [
        'failPhoneNumber' => 'FailPhoneNumber',
    ];

    public function validate()
    {
        if (\is_array($this->failPhoneNumber)) {
            Model::validateArray($this->failPhoneNumber);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failPhoneNumber) {
            if (\is_array($this->failPhoneNumber)) {
                $res['FailPhoneNumber'] = [];
                $n1 = 0;
                foreach ($this->failPhoneNumber as $item1) {
                    $res['FailPhoneNumber'][$n1] = $item1;
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
        if (isset($map['FailPhoneNumber'])) {
            if (!empty($map['FailPhoneNumber'])) {
                $model->failPhoneNumber = [];
                $n1 = 0;
                foreach ($map['FailPhoneNumber'] as $item1) {
                    $model->failPhoneNumber[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
