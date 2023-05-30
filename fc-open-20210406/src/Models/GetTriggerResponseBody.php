<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class GetTriggerResponseBody extends Model
{
    /**
     * @description The ARN of the RAM role that is used by the event source to invoke the function.
     *
     * @example 2016-08-15T15:00:00.000+0000
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The unique ID of the trigger.
     *
     * @example trigger for test
     *
     * @var string
     */
    public $description;

    /**
     * @description The public domain address. You can access HTTP triggers over the Internet by using HTTP or HTTPS.
     *
     * @example demo-service-demo-function-jkhksh
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The time when the trigger was last modified.
     *
     * @example acs:ram::123456xxxx:role/fc-test
     *
     * @var string
     */
    public $invocationRole;

    /**
     * @description The version or alias of the service.
     *
     * @example 016-08-15T17:00:00.000+0000
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @description The ARN of the event source.
     *
     * @example LATEST
     *
     * @var string
     */
    public $qualifier;

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
     * @example acs:oss:cn-shanghai:123456xxxx:mybucket
     *
     * @var string
     */
    public $sourceArn;

    /**
     * @description The name of the trigger.
     *
     * @example {"events": ["oss:ObjectCreated:*"], "filter": {"key": {"prefix": "/prefix", "suffix": ".zip"}}}
     *
     * @var string
     */
    public $triggerConfig;

    /**
     * @description The domain name used to invoke the function by using HTTP. You can add this domain name as the prefix to the endpoint of Function Compute. This way, you can invoke the function that corresponds to the trigger by using HTTP. For example, `{domainName}.cn-shanghai.fc.aliyuncs.com`.
     *
     * @example 3e270f2f-cef2-421a-bc86-ff4e8088476a
     *
     * @var string
     */
    public $triggerId;

    /**
     * @description The trigger type, such as **oss**, **log**, **tablestore**, **timer**, **http**, **cdn_events**, and **mns_topic**.
     *
     * @example demoTrigger
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

    /**
     * @description The private endpoint. In a VPC, you can access HTTP triggers by using HTTP or HTTPS.
     *
     * @example https://svc-func-xxxxxxxx.cn-hangzhou.fcapp.run
     *
     * @var string
     */
    public $urlInternet;

    /**
     * @example https://svc-func-xxxxxxxx.cn-hangzhou-vpc.fcapp.run
     *
     * @var string
     */
    public $urlIntranet;
    protected $_name = [
        'createdTime'      => 'createdTime',
        'description'      => 'description',
        'domainName'       => 'domainName',
        'invocationRole'   => 'invocationRole',
        'lastModifiedTime' => 'lastModifiedTime',
        'qualifier'        => 'qualifier',
        'sourceArn'        => 'sourceArn',
        'triggerConfig'    => 'triggerConfig',
        'triggerId'        => 'triggerId',
        'triggerName'      => 'triggerName',
        'triggerType'      => 'triggerType',
        'urlInternet'      => 'urlInternet',
        'urlIntranet'      => 'urlIntranet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->domainName) {
            $res['domainName'] = $this->domainName;
        }
        if (null !== $this->invocationRole) {
            $res['invocationRole'] = $this->invocationRole;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
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
        if (null !== $this->triggerId) {
            $res['triggerId'] = $this->triggerId;
        }
        if (null !== $this->triggerName) {
            $res['triggerName'] = $this->triggerName;
        }
        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
        }
        if (null !== $this->urlInternet) {
            $res['urlInternet'] = $this->urlInternet;
        }
        if (null !== $this->urlIntranet) {
            $res['urlIntranet'] = $this->urlIntranet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTriggerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['domainName'])) {
            $model->domainName = $map['domainName'];
        }
        if (isset($map['invocationRole'])) {
            $model->invocationRole = $map['invocationRole'];
        }
        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
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
        if (isset($map['triggerId'])) {
            $model->triggerId = $map['triggerId'];
        }
        if (isset($map['triggerName'])) {
            $model->triggerName = $map['triggerName'];
        }
        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }
        if (isset($map['urlInternet'])) {
            $model->urlInternet = $map['urlInternet'];
        }
        if (isset($map['urlIntranet'])) {
            $model->urlIntranet = $map['urlIntranet'];
        }

        return $model;
    }
}
