<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateLiveMessageAppRequest extends Model
{
    /**
     * @description The name of the application. The name must be 2 to 16 characters in length.
     *
     * @example testApp
     *
     * @var string
     */
    public $appName;

    /**
     * @description The content moderation method. Valid values:
     *
     *   0 (default): disables content moderation.
     *   1: uses built-in content moderation.
     *   2: uses custom content moderation.
     *
     * @example 2
     *
     * @var int
     */
    public $auditType;

    /**
     * @description The URL for content moderation. If you set AuditType to 2, you must specify this parameter. The URL must start with http:// or https:// and cannot contain a private IP address or a port number. For more information about custom content moderation, see the "Custom content moderation" section of this topic.
     *
     * @example http://demo.aliyundoc.com/exampleaudit
     *
     * @var string
     */
    public $auditUrl;

    /**
     * @description The data center. Valid values:
     *
     *   cn-shanghai (default)
     *   ap-southeast-1: Singapore
     *
     * >  When you call other operations to manage the interactive messaging application, you must specify the same data center in which the application is created.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description The callback URL for events, such as logon, logoff, and joining and leaving a group. If you leave this parameter empty, event callbacks are disabled. [](~~2672836~~)The callback URL must start with http:// or https:// and cannot contain a private IP address or a port number. For information about the callback message format and authentication logic, see the "Event callbacks" and "Callback authentication" sections of this topic.
     *
     * @example http://demo.aliyundoc.com/examplecallback
     *
     * @var string
     */
    public $eventCallbackUrl;

    /**
     * @description The retention period of group messages in the application. Valid values:
     *
     *   0 (default): 30 days.
     *   1: 90 days.
     *   2: 180 days.
     *
     * @example 1
     *
     * @var int
     */
    public $msgLifeCycle;
    protected $_name = [
        'appName' => 'AppName',
        'auditType' => 'AuditType',
        'auditUrl' => 'AuditUrl',
        'dataCenter' => 'DataCenter',
        'eventCallbackUrl' => 'EventCallbackUrl',
        'msgLifeCycle' => 'MsgLifeCycle',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->auditType) {
            $res['AuditType'] = $this->auditType;
        }
        if (null !== $this->auditUrl) {
            $res['AuditUrl'] = $this->auditUrl;
        }
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }
        if (null !== $this->eventCallbackUrl) {
            $res['EventCallbackUrl'] = $this->eventCallbackUrl;
        }
        if (null !== $this->msgLifeCycle) {
            $res['MsgLifeCycle'] = $this->msgLifeCycle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLiveMessageAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AuditType'])) {
            $model->auditType = $map['AuditType'];
        }
        if (isset($map['AuditUrl'])) {
            $model->auditUrl = $map['AuditUrl'];
        }
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }
        if (isset($map['EventCallbackUrl'])) {
            $model->eventCallbackUrl = $map['EventCallbackUrl'];
        }
        if (isset($map['MsgLifeCycle'])) {
            $model->msgLifeCycle = $map['MsgLifeCycle'];
        }

        return $model;
    }
}
