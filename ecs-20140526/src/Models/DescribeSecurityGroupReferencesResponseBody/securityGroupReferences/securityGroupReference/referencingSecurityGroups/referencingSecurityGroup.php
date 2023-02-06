<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponseBody\securityGroupReferences\securityGroupReference\referencingSecurityGroups;

use AlibabaCloud\Tea\Model;

class referencingSecurityGroup extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account to which the security group belongs.
     *
     * @example 123456****
     *
     * @var string
     */
    public $aliUid;

    /**
     * @description The ID of the security group.
     *
     * @example sg-bp67acfmxazb4j****
     *
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'aliUid'          => 'AliUid',
        'securityGroupId' => 'SecurityGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return referencingSecurityGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}
