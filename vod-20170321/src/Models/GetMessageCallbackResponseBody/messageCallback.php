<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMessageCallbackResponseBody;

use AlibabaCloud\Tea\Model;

class messageCallback extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **GetMessageCallback**.
     *
     * @example app-1000000
     *
     * @var string
     */
    public $appId;

    /**
     * @description Queries the callback method, callback URL, and event type of an event notification.
     *
     * @example 12345678abc
     *
     * @var string
     */
    public $authKey;

    /**
     * @example on
     *
     * @var string
     */
    public $authSwitch;

    /**
     * @description Indicates whether callback authentication is enabled. This parameter is returned only for HTTP callbacks. Valid values:
     *
     *   **on**: indicates that authentication is enabled.
     *   **off**: indicates that authentication is disabled.
     *
     * @example HTTP
     *
     * @var string
     */
    public $callbackType;

    /**
     * @description The ID of the application.
     *
     * @example http://test.com/test
     *
     * @var string
     */
    public $callbackURL;

    /**
     * @description The ID of the request.
     *
     * @example FileUploadComplete,StreamTranscodeComplete,TranscodeComplete,SnapshotComplete,AIComplete,AddLiveRecordVideoComplete,CreateAuditComplete,UploadByURLComplete,ProduceMediaComplete,LiveRecordVideoComposeStart,ImageUploadComplete,VideoAnalysisComplete
     *
     * @var string
     */
    public $eventTypeList;

    /**
     * @example http://1234567.mns.cn-shanghai-internal.aliyuncs.com/
     *
     * @var string
     */
    public $mnsEndpoint;

    /**
     * @description The callback URL. This parameter is returned only for HTTP callbacks.
     *
     * @example vodcallback
     *
     * @var string
     */
    public $mnsQueueName;
    protected $_name = [
        'appId'         => 'AppId',
        'authKey'       => 'AuthKey',
        'authSwitch'    => 'AuthSwitch',
        'callbackType'  => 'CallbackType',
        'callbackURL'   => 'CallbackURL',
        'eventTypeList' => 'EventTypeList',
        'mnsEndpoint'   => 'MnsEndpoint',
        'mnsQueueName'  => 'MnsQueueName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->authSwitch) {
            $res['AuthSwitch'] = $this->authSwitch;
        }
        if (null !== $this->callbackType) {
            $res['CallbackType'] = $this->callbackType;
        }
        if (null !== $this->callbackURL) {
            $res['CallbackURL'] = $this->callbackURL;
        }
        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = $this->eventTypeList;
        }
        if (null !== $this->mnsEndpoint) {
            $res['MnsEndpoint'] = $this->mnsEndpoint;
        }
        if (null !== $this->mnsQueueName) {
            $res['MnsQueueName'] = $this->mnsQueueName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messageCallback
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['AuthSwitch'])) {
            $model->authSwitch = $map['AuthSwitch'];
        }
        if (isset($map['CallbackType'])) {
            $model->callbackType = $map['CallbackType'];
        }
        if (isset($map['CallbackURL'])) {
            $model->callbackURL = $map['CallbackURL'];
        }
        if (isset($map['EventTypeList'])) {
            $model->eventTypeList = $map['EventTypeList'];
        }
        if (isset($map['MnsEndpoint'])) {
            $model->mnsEndpoint = $map['MnsEndpoint'];
        }
        if (isset($map['MnsQueueName'])) {
            $model->mnsQueueName = $map['MnsQueueName'];
        }

        return $model;
    }
}
