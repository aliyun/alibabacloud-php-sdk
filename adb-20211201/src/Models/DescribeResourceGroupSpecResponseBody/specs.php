<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeResourceGroupSpecResponseBody;

use AlibabaCloud\Dara\Model;

class specs extends Model
{
    /**
     * @var string[]
     */
    public $allocateUnits;

    /**
     * @var int
     */
    public $maxQuantity;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'allocateUnits' => 'AllocateUnits',
        'maxQuantity' => 'MaxQuantity',
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->allocateUnits)) {
            Model::validateArray($this->allocateUnits);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocateUnits) {
            if (\is_array($this->allocateUnits)) {
                $res['AllocateUnits'] = [];
                $n1 = 0;
                foreach ($this->allocateUnits as $item1) {
                    $res['AllocateUnits'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxQuantity) {
            $res['MaxQuantity'] = $this->maxQuantity;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AllocateUnits'])) {
            if (!empty($map['AllocateUnits'])) {
                $model->allocateUnits = [];
                $n1 = 0;
                foreach ($map['AllocateUnits'] as $item1) {
                    $model->allocateUnits[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxQuantity'])) {
            $model->maxQuantity = $map['MaxQuantity'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
