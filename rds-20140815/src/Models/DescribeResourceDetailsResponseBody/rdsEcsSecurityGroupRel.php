<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeResourceDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class rdsEcsSecurityGroupRel extends Model
{
    /**
     * @description The name of the security group.
     *
     * @example test_switch
     *
     * @var string
     */
    public $securityGroupName;
    protected $_name = [
        'securityGroupName' => 'SecurityGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsEcsSecurityGroupRel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }

        return $model;
    }
}
