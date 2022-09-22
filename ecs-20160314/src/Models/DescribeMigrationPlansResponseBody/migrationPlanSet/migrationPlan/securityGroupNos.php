<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationPlansResponseBody\migrationPlanSet\migrationPlan;

use AlibabaCloud\Tea\Model;

class securityGroupNos extends Model
{
    /**
     * @var string[]
     */
    public $securityGroupNo;
    protected $_name = [
        'securityGroupNo' => 'SecurityGroupNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupNo) {
            $res['SecurityGroupNo'] = $this->securityGroupNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroupNos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupNo'])) {
            if (!empty($map['SecurityGroupNo'])) {
                $model->securityGroupNo = $map['SecurityGroupNo'];
            }
        }

        return $model;
    }
}
