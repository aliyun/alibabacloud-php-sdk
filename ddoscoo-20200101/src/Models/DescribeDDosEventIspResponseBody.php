<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventIspResponseBody\isps;
use AlibabaCloud\Tea\Model;

class DescribeDDosEventIspResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var isps[]
     */
    public $isps;
    protected $_name = [
        'requestId' => 'RequestId',
        'isps'      => 'Isps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->isps) {
            $res['Isps'] = [];
            if (null !== $this->isps && \is_array($this->isps)) {
                $n = 0;
                foreach ($this->isps as $item) {
                    $res['Isps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDDosEventIspResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Isps'])) {
            if (!empty($map['Isps'])) {
                $model->isps = [];
                $n           = 0;
                foreach ($map['Isps'] as $item) {
                    $model->isps[$n++] = null !== $item ? isps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
