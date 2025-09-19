<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomizedStrategyTargetsResponseBody\startegyTargets;

class DescribeCustomizedStrategyTargetsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var startegyTargets[]
     */
    public $startegyTargets;
    protected $_name = [
        'requestId' => 'RequestId',
        'startegyTargets' => 'StartegyTargets',
    ];

    public function validate()
    {
        if (\is_array($this->startegyTargets)) {
            Model::validateArray($this->startegyTargets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startegyTargets) {
            if (\is_array($this->startegyTargets)) {
                $res['StartegyTargets'] = [];
                $n1 = 0;
                foreach ($this->startegyTargets as $item1) {
                    $res['StartegyTargets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StartegyTargets'])) {
            if (!empty($map['StartegyTargets'])) {
                $model->startegyTargets = [];
                $n1 = 0;
                foreach ($map['StartegyTargets'] as $item1) {
                    $model->startegyTargets[$n1] = startegyTargets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
