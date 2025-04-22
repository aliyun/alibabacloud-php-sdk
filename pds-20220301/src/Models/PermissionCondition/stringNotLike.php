<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\PermissionCondition;

use AlibabaCloud\Dara\Model;

class stringNotLike extends Model
{
    /**
     * @var string[]
     */
    public $vpcId;
    protected $_name = [
        'vpcId' => 'vpc_id',
    ];

    public function validate()
    {
        if (\is_array($this->vpcId)) {
            Model::validateArray($this->vpcId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vpcId) {
            if (\is_array($this->vpcId)) {
                $res['vpc_id'] = [];
                $n1 = 0;
                foreach ($this->vpcId as $item1) {
                    $res['vpc_id'][$n1++] = $item1;
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
        if (isset($map['vpc_id'])) {
            if (!empty($map['vpc_id'])) {
                $model->vpcId = [];
                $n1 = 0;
                foreach ($map['vpc_id'] as $item1) {
                    $model->vpcId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
