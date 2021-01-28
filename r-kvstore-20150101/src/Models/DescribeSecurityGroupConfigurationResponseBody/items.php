<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityGroupConfigurationResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityGroupConfigurationResponseBody\items\ecsSecurityGroupRelation;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsSecurityGroupRelation) {
            $res['EcsSecurityGroupRelation'] = [];
            if (null !== $this->ecsSecurityGroupRelation && \is_array($this->ecsSecurityGroupRelation)) {
                $n = 0;
                foreach ($this->ecsSecurityGroupRelation as $item) {
                    $res['EcsSecurityGroupRelation'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['EcsSecurityGroupRelation'])) {
            if (!empty($map['EcsSecurityGroupRelation'])) {
                $model->ecsSecurityGroupRelation = [];
                $n                               = 0;
                foreach ($map['EcsSecurityGroupRelation'] as $item) {
                    $model->ecsSecurityGroupRelation[$n++] = null !== $item ? ecsSecurityGroupRelation::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
