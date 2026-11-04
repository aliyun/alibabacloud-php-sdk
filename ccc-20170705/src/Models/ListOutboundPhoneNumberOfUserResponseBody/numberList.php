<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListOutboundPhoneNumberOfUserResponseBody;

use AlibabaCloud\Dara\Model;

class numberList extends Model
{
    /**
     * @var string[]
     */
    public $number;
    protected $_name = [
        'number' => 'Number',
    ];

    public function validate()
    {
        if (\is_array($this->number)) {
            Model::validateArray($this->number);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->number) {
            if (\is_array($this->number)) {
                $res['Number'] = [];
                $n1 = 0;
                foreach ($this->number as $item1) {
                    $res['Number'][$n1] = $item1;
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
        if (isset($map['Number'])) {
            if (!empty($map['Number'])) {
                $model->number = [];
                $n1 = 0;
                foreach ($map['Number'] as $item1) {
                    $model->number[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
