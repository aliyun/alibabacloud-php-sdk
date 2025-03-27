<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateMediaLiveInputShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $inputSettingsShrink;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $securityGroupIdsShrink;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'inputSettingsShrink' => 'InputSettings',
        'name' => 'Name',
        'securityGroupIdsShrink' => 'SecurityGroupIds',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputSettingsShrink) {
            $res['InputSettings'] = $this->inputSettingsShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->securityGroupIdsShrink) {
            $res['SecurityGroupIds'] = $this->securityGroupIdsShrink;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['InputSettings'])) {
            $model->inputSettingsShrink = $map['InputSettings'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIdsShrink = $map['SecurityGroupIds'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
