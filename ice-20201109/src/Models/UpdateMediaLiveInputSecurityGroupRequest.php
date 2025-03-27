<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class UpdateMediaLiveInputSecurityGroupRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string[]
     */
    public $whitelistRules;
    protected $_name = [
        'name' => 'Name',
        'securityGroupId' => 'SecurityGroupId',
        'whitelistRules' => 'WhitelistRules',
    ];

    public function validate()
    {
        if (\is_array($this->whitelistRules)) {
            Model::validateArray($this->whitelistRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->whitelistRules) {
            if (\is_array($this->whitelistRules)) {
                $res['WhitelistRules'] = [];
                $n1 = 0;
                foreach ($this->whitelistRules as $item1) {
                    $res['WhitelistRules'][$n1++] = $item1;
                }
            }
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

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['WhitelistRules'])) {
            if (!empty($map['WhitelistRules'])) {
                $model->whitelistRules = [];
                $n1 = 0;
                foreach ($map['WhitelistRules'] as $item1) {
                    $model->whitelistRules[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
