<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ListResidentResourcePoolsOutput extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var ResidentResourcePool[]
     */
    public $residentResourcePools;
    protected $_name = [
        'nextToken' => 'nextToken',
        'residentResourcePools' => 'residentResourcePools',
    ];

    public function validate()
    {
        if (\is_array($this->residentResourcePools)) {
            Model::validateArray($this->residentResourcePools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->residentResourcePools) {
            if (\is_array($this->residentResourcePools)) {
                $res['residentResourcePools'] = [];
                $n1 = 0;
                foreach ($this->residentResourcePools as $item1) {
                    $res['residentResourcePools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['residentResourcePools'])) {
            if (!empty($map['residentResourcePools'])) {
                $model->residentResourcePools = [];
                $n1 = 0;
                foreach ($map['residentResourcePools'] as $item1) {
                    $model->residentResourcePools[$n1] = ResidentResourcePool::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
