<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventAttackTypeResponseBody\attackTypes;
use AlibabaCloud\Tea\Model;

class DescribeDDosEventAttackTypeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var attackTypes[]
     */
    public $attackTypes;
    protected $_name = [
        'requestId'   => 'RequestId',
        'attackTypes' => 'AttackTypes',
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
        if (null !== $this->attackTypes) {
            $res['AttackTypes'] = [];
            if (null !== $this->attackTypes && \is_array($this->attackTypes)) {
                $n = 0;
                foreach ($this->attackTypes as $item) {
                    $res['AttackTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDDosEventAttackTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AttackTypes'])) {
            if (!empty($map['AttackTypes'])) {
                $model->attackTypes = [];
                $n                  = 0;
                foreach ($map['AttackTypes'] as $item) {
                    $model->attackTypes[$n++] = null !== $item ? attackTypes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
