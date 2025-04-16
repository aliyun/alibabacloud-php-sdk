<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallAclGroupListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallAclGroupListResponseBody\aclGroupList\aclConfig;

class aclGroupList extends Model
{
    /**
     * @var aclConfig
     */
    public $aclConfig;

    /**
     * @var string
     */
    public $aclGroupId;

    /**
     * @var string
     */
    public $aclGroupName;

    /**
     * @var int
     */
    public $aclRuleCount;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $memberUid;
    protected $_name = [
        'aclConfig' => 'AclConfig',
        'aclGroupId' => 'AclGroupId',
        'aclGroupName' => 'AclGroupName',
        'aclRuleCount' => 'AclRuleCount',
        'isDefault' => 'IsDefault',
        'memberUid' => 'MemberUid',
    ];

    public function validate()
    {
        if (null !== $this->aclConfig) {
            $this->aclConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclConfig) {
            $res['AclConfig'] = null !== $this->aclConfig ? $this->aclConfig->toArray($noStream) : $this->aclConfig;
        }

        if (null !== $this->aclGroupId) {
            $res['AclGroupId'] = $this->aclGroupId;
        }

        if (null !== $this->aclGroupName) {
            $res['AclGroupName'] = $this->aclGroupName;
        }

        if (null !== $this->aclRuleCount) {
            $res['AclRuleCount'] = $this->aclRuleCount;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
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
        if (isset($map['AclConfig'])) {
            $model->aclConfig = aclConfig::fromMap($map['AclConfig']);
        }

        if (isset($map['AclGroupId'])) {
            $model->aclGroupId = $map['AclGroupId'];
        }

        if (isset($map['AclGroupName'])) {
            $model->aclGroupName = $map['AclGroupName'];
        }

        if (isset($map['AclRuleCount'])) {
            $model->aclRuleCount = $map['AclRuleCount'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        return $model;
    }
}
