<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityGroupConfigurationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityGroupConfigurationResponseBody\items\ecsSecurityGroupRelation;

class items extends Model
{
    /**
     * @var ecsSecurityGroupRelation[]
     */
    public $ecsSecurityGroupRelation;
    protected $_name = [
        'ecsSecurityGroupRelation' => 'EcsSecurityGroupRelation',
    ];

    public function validate()
    {
        if (\is_array($this->ecsSecurityGroupRelation)) {
            Model::validateArray($this->ecsSecurityGroupRelation);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecsSecurityGroupRelation) {
            if (\is_array($this->ecsSecurityGroupRelation)) {
                $res['EcsSecurityGroupRelation'] = [];
                $n1 = 0;
                foreach ($this->ecsSecurityGroupRelation as $item1) {
                    $res['EcsSecurityGroupRelation'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EcsSecurityGroupRelation'])) {
            if (!empty($map['EcsSecurityGroupRelation'])) {
                $model->ecsSecurityGroupRelation = [];
                $n1 = 0;
                foreach ($map['EcsSecurityGroupRelation'] as $item1) {
                    $model->ecsSecurityGroupRelation[$n1++] = ecsSecurityGroupRelation::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
