<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveMessageAppResponseBody extends Model
{
    /**
     * @description The ID of the interactive messaging application.
     *
     * @example demo
     *
     * @var string
     */
    public $appId;

    /**
     * @description The AppKey of the interactive messaging application. It is used to authorize operations related to the application ID.
     *
     * @example **********************************
     *
     * @var string
     */
    public $appKey;

    /**
     * @description The name of the interactive messaging application.
     *
     * @example testApp
     *
     * @var string
     */
    public $appName;

    /**
     * @description The signature of the interactive messaging application. It is required by the interactive messaging SDK.
     *
     * @example **************************************************************************
     *
     * @var string
     */
    public $appSign;

    /**
     * @description The content moderation method. Valid values:
     *
     *   0: Content moderation is disabled.
     *   1: Built-in content moderation is used.
     *   2: Custom content moderation is used.
     *
     * @example 2
     *
     * @var int
     */
    public $auditType;

    /**
     * @description The URL for content moderation. This parameter is returned when the value of AuditType is 2.
     *
     * @example http://example.aliyundoc.com/exampleaudit
     *
     * @var string
     */
    public $auditUrl;

    /**
     * @description The time when the interactive messaging application was created. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1698305471
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The data center.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description Indicates whether the interactive messaging application is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $disable;

    /**
     * @description The callback URL for events such as user logon, logoff, joining a group, and leaving a group. An empty value indicates that callbacks are disabled.
     *
     * @example http://example.aliyundoc.com/examplecallback
     *
     * @var string
     */
    public $eventCallbackUrl;

    /**
     * @description The time when the interactive messaging application was modified. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1698305471
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The retention period of group messages in the application. Valid values:
     *
     *   0 (default): 30 days
     *   1: 90 days
     *   2: 180 days
     *
     * @example 1
     *
     * @var int
     */
    public $msgLifeCycle;

    /**
     * @description The request ID.
     *
     * @example 9FB68B5B-ED07-18F0-A3CF-083F4E74****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appId' => 'AppId',
        'appKey' => 'AppKey',
        'appName' => 'AppName',
        'appSign' => 'AppSign',
        'auditType' => 'AuditType',
        'auditUrl' => 'AuditUrl',
        'createTime' => 'CreateTime',
        'dataCenter' => 'DataCenter',
        'disable' => 'Disable',
        'eventCallbackUrl' => 'EventCallbackUrl',
        'modifyTime' => 'ModifyTime',
        'msgLifeCycle' => 'MsgLifeCycle',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appSign) {
            $res['AppSign'] = $this->appSign;
        }
        if (null !== $this->auditType) {
            $res['AuditType'] = $this->auditType;
        }
        if (null !== $this->auditUrl) {
            $res['AuditUrl'] = $this->auditUrl;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }
        if (null !== $this->disable) {
            $res['Disable'] = $this->disable;
        }
        if (null !== $this->eventCallbackUrl) {
            $res['EventCallbackUrl'] = $this->eventCallbackUrl;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->msgLifeCycle) {
            $res['MsgLifeCycle'] = $this->msgLifeCycle;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveMessageAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppSign'])) {
            $model->appSign = $map['AppSign'];
        }
        if (isset($map['AuditType'])) {
            $model->auditType = $map['AuditType'];
        }
        if (isset($map['AuditUrl'])) {
            $model->auditUrl = $map['AuditUrl'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }
        if (isset($map['Disable'])) {
            $model->disable = $map['Disable'];
        }
        if (isset($map['EventCallbackUrl'])) {
            $model->eventCallbackUrl = $map['EventCallbackUrl'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['MsgLifeCycle'])) {
            $model->msgLifeCycle = $map['MsgLifeCycle'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
