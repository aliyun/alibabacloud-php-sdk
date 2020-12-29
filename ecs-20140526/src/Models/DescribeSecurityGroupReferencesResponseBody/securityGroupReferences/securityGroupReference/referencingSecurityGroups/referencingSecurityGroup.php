<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponseBody\securityGroupReferences\securityGroupReference\referencingSecurityGroups;

use AlibabaCloud\Tea\Model;

class referencingSecurityGroup extends Model
{
    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $aliUid;
    protected $_name = [
        'securityGroupId' => 'SecurityGroupId',
        'aliUid'          => 'AliUid',
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
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
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
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        return $model;
    }
}
