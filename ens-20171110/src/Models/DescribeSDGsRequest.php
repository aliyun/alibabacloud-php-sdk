<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeSDGsRequest extends Model
{
    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string[]
     */
    public $SDGIds;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'SDGIds' => 'SDGIds',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->SDGIds)) {
            Model::validateArray($this->SDGIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->SDGIds) {
            if (\is_array($this->SDGIds)) {
                $res['SDGIds'] = [];
                $n1 = 0;
                foreach ($this->SDGIds as $item1) {
                    $res['SDGIds'][$n1] = $item1;
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
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SDGIds'])) {
            if (!empty($map['SDGIds'])) {
                $model->SDGIds = [];
                $n1 = 0;
                foreach ($map['SDGIds'] as $item1) {
                    $model->SDGIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
