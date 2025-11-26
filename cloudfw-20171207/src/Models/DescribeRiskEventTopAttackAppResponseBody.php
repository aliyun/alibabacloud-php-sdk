<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventTopAttackAppResponseBody\attackApps;

class DescribeRiskEventTopAttackAppResponseBody extends Model
{
    /**
     * @var attackApps[]
     */
    public $attackApps;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attackApps' => 'AttackApps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->attackApps)) {
            Model::validateArray($this->attackApps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackApps) {
            if (\is_array($this->attackApps)) {
                $res['AttackApps'] = [];
                $n1 = 0;
                foreach ($this->attackApps as $item1) {
                    $res['AttackApps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AttackApps'])) {
            if (!empty($map['AttackApps'])) {
                $model->attackApps = [];
                $n1 = 0;
                foreach ($map['AttackApps'] as $item1) {
                    $model->attackApps[$n1] = attackApps::fromMap($item1);
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
