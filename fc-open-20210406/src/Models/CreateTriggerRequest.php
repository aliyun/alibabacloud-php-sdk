<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class CreateTriggerRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @description event source，如OSS，使用该role去invoke function
     *
     * @var string
     */
    public $invocationRole;

    /**
     * @description service版本
     *
     * @var string
     */
    public $qualifier;

    /**
     * @description event source的Aliyun Resource Name（ARN
     *
     * @var string
     */
    public $sourceArn;

    /**
     * @description trigger配置，针对不同的trigger类型，trigger配置会有所不同
     *
     * @var string
     */
    public $triggerConfig;

    /**
     * @description trigger名称
     *
     * @var string
     */
    public $triggerName;

    /**
     * @description trigger类型，如 oss, log, tablestore, timer, http, cdn_events, mns_topic
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
     * @return CreateTriggerRequest
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
