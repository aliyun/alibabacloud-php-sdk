<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListVpcResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListVpcResponseBody\vpcList\vpcEntity;

class vpcList extends Model
{
    /**
     * @var vpcEntity[]
     */
    public $vpcEntity;
    protected $_name = [
        'vpcEntity' => 'VpcEntity',
    ];

    public function validate()
    {
        if (\is_array($this->vpcEntity)) {
            Model::validateArray($this->vpcEntity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vpcEntity) {
            if (\is_array($this->vpcEntity)) {
                $res['VpcEntity'] = [];
                $n1 = 0;
                foreach ($this->vpcEntity as $item1) {
                    $res['VpcEntity'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VpcEntity'])) {
            if (!empty($map['VpcEntity'])) {
                $model->vpcEntity = [];
                $n1 = 0;
                foreach ($map['VpcEntity'] as $item1) {
                    $model->vpcEntity[$n1] = vpcEntity::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
