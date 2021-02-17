<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSecurityGroupConfigurationResponseBody;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSecurityGroupConfigurationResponseBody\items\rdsEcsSecurityGroupRel;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rdsEcsSecurityGroupRel) {
            $res['RdsEcsSecurityGroupRel'] = [];
            if (null !== $this->rdsEcsSecurityGroupRel && \is_array($this->rdsEcsSecurityGroupRel)) {
                $n = 0;
                foreach ($this->rdsEcsSecurityGroupRel as $item) {
                    $res['RdsEcsSecurityGroupRel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RdsEcsSecurityGroupRel'])) {
            if (!empty($map['RdsEcsSecurityGroupRel'])) {
                $model->rdsEcsSecurityGroupRel = [];
                $n                             = 0;
                foreach ($map['RdsEcsSecurityGroupRel'] as $item) {
                    $model->rdsEcsSecurityGroupRel[$n++] = null !== $item ? rdsEcsSecurityGroupRel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
