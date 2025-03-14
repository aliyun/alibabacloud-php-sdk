<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateMediaLiveInputShrinkRequest extends Model
{
    /**
     * @description The ID of the input.
     *
     * This parameter is required.
     *
     * @example SEGK5KA6KYKAWQQH
     *
     * @var string
     */
    public $inputId;

    /**
     * @description The input settings. An input can have up to two sources: primary and backup sources.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $inputSettingsShrink;

    /**
     * @description The name of the input. Letters, digits, hyphens (-), and underscores (_) are supported. It can be up to 64 characters in length.
     *
     * This parameter is required.
     *
     * @example myinput
     *
     * @var string
     */
    public $name;

    /**
     * @description The IDs of the security groups to be associated with the input. This parameter is required for PUSH inputs.
     *
     * @example ["G6G4X5T4SZYPSTT5"]
     *
     * @var string
     */
    public $securityGroupIdsShrink;
    protected $_name = [
        'inputId' => 'InputId',
        'inputSettingsShrink' => 'InputSettings',
        'name' => 'Name',
        'securityGroupIdsShrink' => 'SecurityGroupIds',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateMediaLiveInputShrinkRequest
     */
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
