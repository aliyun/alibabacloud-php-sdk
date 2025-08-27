<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSecurityGroupConfigurationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSecurityGroupConfigurationResponseBody\items\rdsEcsSecurityGroupRel;

class items extends Model
{
    /**
     * @var rdsEcsSecurityGroupRel[]
     */
    public $rdsEcsSecurityGroupRel;
    protected $_name = [
        'rdsEcsSecurityGroupRel' => 'RdsEcsSecurityGroupRel',
    ];

    public function validate()
    {
        if (\is_array($this->rdsEcsSecurityGroupRel)) {
            Model::validateArray($this->rdsEcsSecurityGroupRel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rdsEcsSecurityGroupRel) {
            if (\is_array($this->rdsEcsSecurityGroupRel)) {
                $res['RdsEcsSecurityGroupRel'] = [];
                $n1 = 0;
                foreach ($this->rdsEcsSecurityGroupRel as $item1) {
                    $res['RdsEcsSecurityGroupRel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RdsEcsSecurityGroupRel'])) {
            if (!empty($map['RdsEcsSecurityGroupRel'])) {
                $model->rdsEcsSecurityGroupRel = [];
                $n1 = 0;
                foreach ($map['RdsEcsSecurityGroupRel'] as $item1) {
                    $model->rdsEcsSecurityGroupRel[$n1] = rdsEcsSecurityGroupRel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
