<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateMediaLiveInputSecurityGroupShrinkRequest extends Model
{
    /**
     * @description The name of the security group. Letters, digits, hyphens (-), and underscores (_) are supported. The maximum length is 64 characters.
     *
     * This parameter is required.
     *
     * @example mysg
     *
     * @var string
     */
    public $name;

    /**
     * @description The security group rules.
     *
     * This parameter is required.
     *
     * @example ["10.1.1.0/24", "11.11.11.11/0"]
     *
     * @var string
     */
    public $whitelistRulesShrink;
    protected $_name = [
        'name' => 'Name',
        'whitelistRulesShrink' => 'WhitelistRules',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->whitelistRulesShrink) {
            $res['WhitelistRules'] = $this->whitelistRulesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMediaLiveInputSecurityGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['WhitelistRules'])) {
            $model->whitelistRulesShrink = $map['WhitelistRules'];
        }

        return $model;
    }
}
