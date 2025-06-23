<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosEventAttackTypeResponseBody\attackTypes;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->attackTypes)) {
            Model::validateArray($this->attackTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackTypes) {
            if (\is_array($this->attackTypes)) {
                $res['AttackTypes'] = [];
                $n1 = 0;
                foreach ($this->attackTypes as $item1) {
                    $res['AttackTypes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AttackTypes'])) {
            if (!empty($map['AttackTypes'])) {
                $model->attackTypes = [];
                $n1 = 0;
                foreach ($map['AttackTypes'] as $item1) {
                    $model->attackTypes[$n1] = attackTypes::fromMap($item1);
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
