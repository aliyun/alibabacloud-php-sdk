<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class CreateTriggerRequest extends Model
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
     * @example acs:ram::1234567890:role/fc-test
     *
     * @var string
     */
    public $invocationRole;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the event source for the trigger.
     *
     * @example LATEST
     *
     * @var string
     */
    public $qualifier;

    /**
     * @description The configurations of the trigger. The configurations vary based on the trigger type. For more information about the format, see the following topics:
     *
     * OSS trigger: [OSSTriggerConfig](~~struct:OSSTriggerConfig~~).
     * Log Service trigger: [LogTriggerConfig](~~struct:LogTriggerConfig~~).
     * Time trigger: [TimeTriggerConfig](~~struct:LogTriggerConfig~~).
     * HTTP trigger: [HTTPTriggerConfig](~~struct:HTTPTriggerConfig~~).
     * Tablestore trigger: Specify the **SourceArn** parameter and leave this parameter empty.
     * Alibaba Cloud CDN event trigger: [CDNEventsTriggerConfig](~~struct:CDNEventsTriggerConfig~~).
     * MNS topic trigger: [MnsTopicTriggerConfig](~~struct:MnsTopicTriggerConfig~~).
     *
     * @example acs:oss:cn-shanghai:12345:mybucket
     *
     * @var string
     */
    public $sourceArn;

    /**
     * @description The name of the trigger. The name contains only letters, digits, hyphens (-), and underscores (\_). The name must be 1 to 128 characters in length and cannot start with a digit or hyphen (-).
     *
     * @example {"events": ["oss:ObjectCreated:*"], "filter": {"key": {"prefix": "/prefix", "suffix": ".zip"}}}
     *
     * @var string
     */
    public $triggerConfig;

    /**
     * @description The type of the trigger. Valid values:
     *
     *   **oss**: OSS event trigger. For more information, see [Overview](~~62922~~).
     *   **log**: Log Service trigger. For more information, see [Overview](~~84386~~).
     *   **timer**: time trigger. For more information, see [Overview](~~68172~~).
     *   **http**: HTTP trigger. For more information, see [Overview](~~71229~~).
     *   **tablestore**: Tablestore trigger. For more information, see [Overview](~~100092~~).
     *   **cdn_events**: CDN event trigger. For more information, see [Overview](~~73333~~).
     *   **mns_topic**: MNS topic trigger. For more information, see [Overview](~~97032~~).
     *
     * @example oss_create_object_demo
     *
     * @var string
     */
    public $triggerName;

    /**
     * @description The description of the trigger.
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
