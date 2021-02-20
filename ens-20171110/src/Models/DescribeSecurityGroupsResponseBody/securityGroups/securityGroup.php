<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupsResponseBody\securityGroups;

use AlibabaCloud\Tea\Model;

class securityGroup extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $securityGroupName;
    protected $_name = [
        'creationTime'      => 'CreationTime',
        'securityGroupId'   => 'SecurityGroupId',
        'securityGroupName' => 'SecurityGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }

        return $model;
    }
}
