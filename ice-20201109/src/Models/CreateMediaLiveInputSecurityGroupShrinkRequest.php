<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateMediaLiveInputSecurityGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $whitelistRulesShrink;
    protected $_name = [
        'name' => 'Name',
        'whitelistRulesShrink' => 'WhitelistRules',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
