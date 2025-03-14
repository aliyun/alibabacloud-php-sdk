<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateMediaLiveInputSecurityGroupShrinkRequest extends Model
{
    /**
     * @description The name of the security group. Letters, digits, hyphens (-), and underscores (_) are supported. It can be up to 64 characters in length.
     *
     * This parameter is required.
     *
     * @example mysg
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the security group.
     *
     * This parameter is required.
     *
     * @example SEGK5KA6KYKAWQQH
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The security group rules.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $whitelistRulesShrink;
    protected $_name = [
        'name' => 'Name',
        'securityGroupId' => 'SecurityGroupId',
        'whitelistRulesShrink' => 'WhitelistRules',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->whitelistRulesShrink) {
            $res['WhitelistRules'] = $this->whitelistRulesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMediaLiveInputSecurityGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['WhitelistRules'])) {
            $model->whitelistRulesShrink = $map['WhitelistRules'];
        }

        return $model;
    }
}
