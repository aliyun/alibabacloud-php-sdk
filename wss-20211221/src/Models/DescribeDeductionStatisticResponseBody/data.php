<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeductionStatisticResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeductionStatisticResponseBody\data\availableCorePackages;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeductionStatisticResponseBody\data\deductions;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeductionStatisticResponseBody\data\usages;

class data extends Model
{
    /**
     * @var availableCorePackages[]
     */
    public $availableCorePackages;

    /**
     * @var deductions[]
     */
    public $deductions;

    /**
     * @var usages[]
     */
    public $usages;
    protected $_name = [
        'availableCorePackages' => 'AvailableCorePackages',
        'deductions' => 'Deductions',
        'usages' => 'Usages',
    ];

    public function validate()
    {
        if (\is_array($this->availableCorePackages)) {
            Model::validateArray($this->availableCorePackages);
        }
        if (\is_array($this->deductions)) {
            Model::validateArray($this->deductions);
        }
        if (\is_array($this->usages)) {
            Model::validateArray($this->usages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableCorePackages) {
            if (\is_array($this->availableCorePackages)) {
                $res['AvailableCorePackages'] = [];
                $n1 = 0;
                foreach ($this->availableCorePackages as $item1) {
                    $res['AvailableCorePackages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deductions) {
            if (\is_array($this->deductions)) {
                $res['Deductions'] = [];
                $n1 = 0;
                foreach ($this->deductions as $item1) {
                    $res['Deductions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->usages) {
            if (\is_array($this->usages)) {
                $res['Usages'] = [];
                $n1 = 0;
                foreach ($this->usages as $item1) {
                    $res['Usages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AvailableCorePackages'])) {
            if (!empty($map['AvailableCorePackages'])) {
                $model->availableCorePackages = [];
                $n1 = 0;
                foreach ($map['AvailableCorePackages'] as $item1) {
                    $model->availableCorePackages[$n1] = availableCorePackages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Deductions'])) {
            if (!empty($map['Deductions'])) {
                $model->deductions = [];
                $n1 = 0;
                foreach ($map['Deductions'] as $item1) {
                    $model->deductions[$n1] = deductions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Usages'])) {
            if (!empty($map['Usages'])) {
                $model->usages = [];
                $n1 = 0;
                foreach ($map['Usages'] as $item1) {
                    $model->usages[$n1] = usages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
