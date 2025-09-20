<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DetectImageCarsResponseBody extends Model
{
    /**
     * @var Car[]
     */
    public $cars;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cars' => 'Cars',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->cars)) {
            Model::validateArray($this->cars);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cars) {
            if (\is_array($this->cars)) {
                $res['Cars'] = [];
                $n1 = 0;
                foreach ($this->cars as $item1) {
                    $res['Cars'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Cars'])) {
            if (!empty($map['Cars'])) {
                $model->cars = [];
                $n1 = 0;
                foreach ($map['Cars'] as $item1) {
                    $model->cars[$n1] = Car::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
