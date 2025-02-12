<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventIspResponseBody\isps;

class DescribeDDosEventIspResponseBody extends Model
{
    /**
     * @var isps[]
     */
    public $isps;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isps'      => 'Isps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->isps)) {
            Model::validateArray($this->isps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isps) {
            if (\is_array($this->isps)) {
                $res['Isps'] = [];
                $n1          = 0;
                foreach ($this->isps as $item1) {
                    $res['Isps'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Isps'])) {
            if (!empty($map['Isps'])) {
                $model->isps = [];
                $n1          = 0;
                foreach ($map['Isps'] as $item1) {
                    $model->isps[$n1++] = isps::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
