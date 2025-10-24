<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeChargeModuleResponseBody\chargeModules;

class DescribeChargeModuleResponseBody extends Model
{
    /**
     * @var chargeModules[]
     */
    public $chargeModules;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'chargeModules' => 'ChargeModules',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->chargeModules)) {
            Model::validateArray($this->chargeModules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeModules) {
            if (\is_array($this->chargeModules)) {
                $res['ChargeModules'] = [];
                $n1 = 0;
                foreach ($this->chargeModules as $item1) {
                    $res['ChargeModules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ChargeModules'])) {
            if (!empty($map['ChargeModules'])) {
                $model->chargeModules = [];
                $n1 = 0;
                foreach ($map['ChargeModules'] as $item1) {
                    $model->chargeModules[$n1] = chargeModules::fromMap($item1);
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
