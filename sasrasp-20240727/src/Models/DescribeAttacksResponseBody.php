<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SasRasp\V20240727\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SasRasp\V20240727\Models\DescribeAttacksResponseBody\attacks;

class DescribeAttacksResponseBody extends Model
{
    /**
     * @var attacks[]
     */
    public $attacks;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'attacks' => 'Attacks',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->attacks)) {
            Model::validateArray($this->attacks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attacks) {
            if (\is_array($this->attacks)) {
                $res['Attacks'] = [];
                $n1 = 0;
                foreach ($this->attacks as $item1) {
                    $res['Attacks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Attacks'])) {
            if (!empty($map['Attacks'])) {
                $model->attacks = [];
                $n1 = 0;
                foreach ($map['Attacks'] as $item1) {
                    $model->attacks[$n1] = attacks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
