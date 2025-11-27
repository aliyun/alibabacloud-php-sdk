<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items\items;

use AlibabaCloud\Dara\Model;

class readDelayTimes extends Model
{
    /**
     * @var string[]
     */
    public $readDelayTime;
    protected $_name = [
        'readDelayTime' => 'ReadDelayTime',
    ];

    public function validate()
    {
        if (\is_array($this->readDelayTime)) {
            Model::validateArray($this->readDelayTime);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->readDelayTime) {
            if (\is_array($this->readDelayTime)) {
                $res['ReadDelayTime'] = [];
                $n1 = 0;
                foreach ($this->readDelayTime as $item1) {
                    $res['ReadDelayTime'][$n1] = $item1;
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
        if (isset($map['ReadDelayTime'])) {
            if (!empty($map['ReadDelayTime'])) {
                $model->readDelayTime = [];
                $n1 = 0;
                foreach ($map['ReadDelayTime'] as $item1) {
                    $model->readDelayTime[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
