<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class UpdateTriggerRequest extends Model
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
     * @description trigger配置，针对不同的trigger类型，trigger配置会有所不同
     *
     * @var string
     */
    public $triggerConfig;
    protected $_name = [
        'description'    => 'description',
        'invocationRole' => 'invocationRole',
        'qualifier'      => 'qualifier',
        'triggerConfig'  => 'triggerConfig',
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
        if (null !== $this->triggerConfig) {
            $res['triggerConfig'] = $this->triggerConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTriggerRequest
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
        if (isset($map['triggerConfig'])) {
            $model->triggerConfig = $map['triggerConfig'];
        }

        return $model;
    }
}
