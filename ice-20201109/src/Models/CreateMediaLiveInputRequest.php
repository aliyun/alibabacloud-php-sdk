<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveInputRequest\inputSettings;
use AlibabaCloud\Tea\Model;

class CreateMediaLiveInputRequest extends Model
{
    /**
     * @description The input settings. An input can have up to two sources: primary and backup sources.
     *
     * This parameter is required.
     *
     * @var inputSettings[]
     */
    public $inputSettings;

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
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @description The input type. Valid values: RTMP_PUSH, RTMP_PULL, SRT_PUSH, and SRT_PULL.
     *
     * This parameter is required.
     *
     * @example RTMP_PUSH
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'inputSettings' => 'InputSettings',
        'name' => 'Name',
        'securityGroupIds' => 'SecurityGroupIds',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputSettings) {
            $res['InputSettings'] = [];
            if (null !== $this->inputSettings && \is_array($this->inputSettings)) {
                $n = 0;
                foreach ($this->inputSettings as $item) {
                    $res['InputSettings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMediaLiveInputRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputSettings'])) {
            if (!empty($map['InputSettings'])) {
                $model->inputSettings = [];
                $n = 0;
                foreach ($map['InputSettings'] as $item) {
                    $model->inputSettings[$n++] = null !== $item ? inputSettings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
