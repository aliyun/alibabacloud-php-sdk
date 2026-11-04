<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\AddBulkPhoneNumbersResponseBody;

use AlibabaCloud\Dara\Model;

class arrearagePhoneNumbers extends Model
{
    /**
     * @var string[]
     */
    public $arrearagePhoneNumber;
    protected $_name = [
        'arrearagePhoneNumber' => 'ArrearagePhoneNumber',
    ];

    public function validate()
    {
        if (\is_array($this->arrearagePhoneNumber)) {
            Model::validateArray($this->arrearagePhoneNumber);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrearagePhoneNumber) {
            if (\is_array($this->arrearagePhoneNumber)) {
                $res['ArrearagePhoneNumber'] = [];
                $n1 = 0;
                foreach ($this->arrearagePhoneNumber as $item1) {
                    $res['ArrearagePhoneNumber'][$n1] = $item1;
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
        if (isset($map['ArrearagePhoneNumber'])) {
            if (!empty($map['ArrearagePhoneNumber'])) {
                $model->arrearagePhoneNumber = [];
                $n1 = 0;
                foreach ($map['ArrearagePhoneNumber'] as $item1) {
                    $model->arrearagePhoneNumber[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
