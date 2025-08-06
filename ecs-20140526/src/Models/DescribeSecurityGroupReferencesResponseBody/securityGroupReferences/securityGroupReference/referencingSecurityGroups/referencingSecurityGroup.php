<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponseBody\securityGroupReferences\securityGroupReference\referencingSecurityGroups;

use AlibabaCloud\Dara\Model;

class referencingSecurityGroup extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'aliUid' => 'AliUid',
        'securityGroupId' => 'SecurityGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
