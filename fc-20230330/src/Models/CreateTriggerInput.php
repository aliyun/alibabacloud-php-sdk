<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class CreateTriggerInput extends Model
{
    /**
     * @example trigger for test
     *
     * @var string
     */
    public $description;

    /**
     * @example acs:ram::1234567890:role/fc-test
     *
     * @var string
     */
    public $invocationRole;

    /**
     * @example LATEST
     *
     * @var string
     */
    public $qualifier;

    /**
     * @example acs:oss:cn-shanghai:12345:mybucket
     *
     * @var string
     */
    public $sourceArn;

    /**
     * @description This parameter is required.
     *
     * @example {"events":["oss:ObjectCreated:*"],"filter":{"key":{"prefix":"/prefix","suffix":".zip"}}}
     *
     * @var string
     */
    public $triggerConfig;

    /**
     * @description This parameter is required.
     *
     * @example oss_create_object_demo
     *
     * @var string
     */
    public $triggerName;

    /**
     * @description This parameter is required.
     *
     * @example oss
     *
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'description'    => 'description',
        'invocationRole' => 'invocationRole',
        'qualifier'      => 'qualifier',
        'sourceArn'      => 'sourceArn',
        'triggerConfig'  => 'triggerConfig',
        'triggerName'    => 'triggerName',
        'triggerType'    => 'triggerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->invocationRole) {
            $res['invocationRole'] = $this->invocationRole;
        }
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        if (null !== $this->sourceArn) {
            $res['sourceArn'] = $this->sourceArn;
        }
        if (null !== $this->triggerConfig) {
            $res['triggerConfig'] = $this->triggerConfig;
        }
        if (null !== $this->triggerName) {
            $res['triggerName'] = $this->triggerName;
        }
        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTriggerInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['invocationRole'])) {
            $model->invocationRole = $map['invocationRole'];
        }
        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }
        if (isset($map['sourceArn'])) {
            $model->sourceArn = $map['sourceArn'];
        }
        if (isset($map['triggerConfig'])) {
            $model->triggerConfig = $map['triggerConfig'];
        }
        if (isset($map['triggerName'])) {
            $model->triggerName = $map['triggerName'];
        }
        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }

        return $model;
    }
}
