<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ListVpcBindingsOutput extends Model
{
    /**
     * @var string[]
     */
    public $vpcIds;
    protected $_name = [
        'vpcIds' => 'vpcIds',
    ];

    public function validate()
    {
        if (\is_array($this->vpcIds)) {
            Model::validateArray($this->vpcIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vpcIds) {
            if (\is_array($this->vpcIds)) {
                $res['vpcIds'] = [];
                $n1 = 0;
                foreach ($this->vpcIds as $item1) {
                    $res['vpcIds'][$n1] = $item1;
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
        if (isset($map['vpcIds'])) {
            if (!empty($map['vpcIds'])) {
                $model->vpcIds = [];
                $n1 = 0;
                foreach ($map['vpcIds'] as $item1) {
                    $model->vpcIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
