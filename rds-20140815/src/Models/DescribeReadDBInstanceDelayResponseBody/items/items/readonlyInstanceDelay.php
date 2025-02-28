<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items\items\readonlyInstanceDelay\readonlyInstanceDelay;

class readonlyInstanceDelay extends Model
{
    /**
     * @var readonlyInstanceDelay[]
     */
    public $readonlyInstanceDelay;
    protected $_name = [
        'readonlyInstanceDelay' => 'ReadonlyInstanceDelay',
    ];

    public function validate()
    {
        if (\is_array($this->readonlyInstanceDelay)) {
            Model::validateArray($this->readonlyInstanceDelay);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->readonlyInstanceDelay) {
            if (\is_array($this->readonlyInstanceDelay)) {
                $res['ReadonlyInstanceDelay'] = [];
                $n1                           = 0;
                foreach ($this->readonlyInstanceDelay as $item1) {
                    $res['ReadonlyInstanceDelay'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ReadonlyInstanceDelay'])) {
            if (!empty($map['ReadonlyInstanceDelay'])) {
                $model->readonlyInstanceDelay = [];
                $n1                           = 0;
                foreach ($map['ReadonlyInstanceDelay'] as $item1) {
                    $model->readonlyInstanceDelay[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
