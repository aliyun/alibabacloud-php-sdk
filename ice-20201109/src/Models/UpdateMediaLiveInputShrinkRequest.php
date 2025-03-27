<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class UpdateMediaLiveInputShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $inputId;

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
    protected $_name = [
        'inputId' => 'InputId',
        'inputSettingsShrink' => 'InputSettings',
        'name' => 'Name',
        'securityGroupIdsShrink' => 'SecurityGroupIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputId) {
            $res['InputId'] = $this->inputId;
        }

        if (null !== $this->inputSettingsShrink) {
            $res['InputSettings'] = $this->inputSettingsShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->securityGroupIdsShrink) {
            $res['SecurityGroupIds'] = $this->securityGroupIdsShrink;
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
        if (isset($map['InputId'])) {
            $model->inputId = $map['InputId'];
        }

        if (isset($map['InputSettings'])) {
            $model->inputSettingsShrink = $map['InputSettings'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIdsShrink = $map['SecurityGroupIds'];
        }

        return $model;
    }
}
