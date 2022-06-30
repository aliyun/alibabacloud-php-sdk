<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventAttackTypeResponseBody\attackTypes;
use AlibabaCloud\Tea\Model;

class DescribeDDosEventAttackTypeResponseBody extends Model
{
    /**
     * @var attackTypes[]
     */
    public $attackTypes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attackTypes' => 'AttackTypes',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackTypes) {
            $res['AttackTypes'] = [];
            if (null !== $this->attackTypes && \is_array($this->attackTypes)) {
                $n = 0;
                foreach ($this->attackTypes as $item) {
                    $res['AttackTypes'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDDosEventAttackTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttackTypes'])) {
            if (!empty($map['AttackTypes'])) {
                $model->attackTypes = [];
                $n                  = 0;
                foreach ($map['AttackTypes'] as $item) {
                    $model->attackTypes[$n++] = null !== $item ? attackTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
