<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersResponseBody;

use AlibabaCloud\Dara\Model;

class failedPhoneNumbers extends Model
{
    /**
     * @var string[]
     */
    public $failedPhoneNumber;
    protected $_name = [
        'failedPhoneNumber' => 'FailedPhoneNumber',
    ];

    public function validate()
    {
        if (\is_array($this->failedPhoneNumber)) {
            Model::validateArray($this->failedPhoneNumber);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedPhoneNumber) {
            if (\is_array($this->failedPhoneNumber)) {
                $res['FailedPhoneNumber'] = [];
                $n1 = 0;
                foreach ($this->failedPhoneNumber as $item1) {
                    $res['FailedPhoneNumber'][$n1] = $item1;
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
        if (isset($map['FailedPhoneNumber'])) {
            if (!empty($map['FailedPhoneNumber'])) {
                $model->failedPhoneNumber = [];
                $n1 = 0;
                foreach ($map['FailedPhoneNumber'] as $item1) {
                    $model->failedPhoneNumber[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
