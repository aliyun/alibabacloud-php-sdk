<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DetectImageCarsResponseBody extends Model
{
    /**
     * @var Car[]
     */
    public $cars;

    /**
     * @example A8745209-DD0E-027E-8ABA-085E0C******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cars'      => 'Cars',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cars) {
            $res['Cars'] = [];
            if (null !== $this->cars && \is_array($this->cars)) {
                $n = 0;
                foreach ($this->cars as $item) {
                    $res['Cars'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectImageCarsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cars'])) {
            if (!empty($map['Cars'])) {
                $model->cars = [];
                $n           = 0;
                foreach ($map['Cars'] as $item) {
                    $model->cars[$n++] = null !== $item ? Car::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
