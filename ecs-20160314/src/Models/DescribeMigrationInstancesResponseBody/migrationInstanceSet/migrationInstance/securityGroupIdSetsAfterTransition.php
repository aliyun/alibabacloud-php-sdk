<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeMigrationInstancesResponseBody\migrationInstanceSet\migrationInstance;

use AlibabaCloud\Tea\Model;

class securityGroupIdSetsAfterTransition extends Model
{
    /**
     * @var string[]
     */
    public $securityGroupId;
    protected $_name = [
        'securityGroupId' => 'SecurityGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroupIdSetsAfterTransition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupId'])) {
            if (!empty($map['SecurityGroupId'])) {
                $model->securityGroupId = $map['SecurityGroupId'];
            }
        }

        return $model;
    }
}
