<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class UpdateTriggerRequest extends Model
{
    /**
     * @description The ID of your Alibaba Cloud account.
     *
     * @example trigger for test
     *
     * @var string
     */
    public $description;

    /**
     * @description The version or alias of the service.
     *
     * @example acs:ram::123456xxxx:role/fc-test
     *
     * @var string
     */
    public $invocationRole;

    /**
     * @description The configurations of the trigger. The configurations vary based on the trigger type. For more information about the format, see the following topics:
     *
     *   OSS trigger: [OSSTriggerConfig](~~struct:OSSTriggerConfig~~).
     *   Log Service trigger: [LogTriggerConfig](~~struct:LogTriggerConfig~~).
     *   Time trigger: [TimeTriggerConfig](~~struct:TimeTriggerConfig~~).
     *   HTTP trigger: [HTTPTriggerConfig](~~struct:HTTPTriggerConfig~~).
     *   Tablestore trigger: Specify the **SourceArn** parameter and leave this parameter empty.
     *   Alibaba Cloud CDN event trigger: [CDNEventsTriggerConfig](~~struct:CDNEventsTriggerConfig~~).
     *   MNS topic trigger: [MnsTopicTriggerConfig](~~struct:MnsTopicTriggerConfig~~).
     *
     * @example LATEST
     *
     * @var string
     */
    public $qualifier;

    /**
     * @description The description of the trigger.
     *
     * @example {"events": ["oss:ObjectCreated:*"], "filter": {"key": {"prefix": "/prefix", "suffix": ".zip"}}}
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
