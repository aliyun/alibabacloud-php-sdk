<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancePerformanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancePerformanceResponseBody\performanceKeys\performanceKey;

class performanceKeys extends Model
{
    /**
     * @var performanceKey[]
     */
    public $performanceKey;
    protected $_name = [
        'performanceKey' => 'PerformanceKey',
    ];

    public function validate()
    {
        if (\is_array($this->performanceKey)) {
            Model::validateArray($this->performanceKey);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->performanceKey) {
            if (\is_array($this->performanceKey)) {
                $res['PerformanceKey'] = [];
                $n1 = 0;
                foreach ($this->performanceKey as $item1) {
                    $res['PerformanceKey'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PerformanceKey'])) {
            if (!empty($map['PerformanceKey'])) {
                $model->performanceKey = [];
                $n1 = 0;
                foreach ($map['PerformanceKey'] as $item1) {
                    $model->performanceKey[$n1++] = performanceKey::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
