<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateWebhookContactRequest extends Model
{
    /**
     * @description The HTTP request headers.
     *
     * @example [{"Content-Type":"application/json;charset=utf-8"}]
     *
     * @var string
     */
    public $bizHeaders;

    /**
     * @description The parameters in the HTTP request.
     *
     * @example [{"content":"mike"}]
     *
     * @var string
     */
    public $bizParams;

    /**
     * @description The notification template that is sent when an alert is triggered. This parameter is required if the **Method** parameter is set to **Post**. You can use the `$content` placeholder to specify the notification content. The content cannot exceed 500 characters in length. For more information, see [Variable description of a notification template](https://help.aliyun.com/document_detail/251834.html).\\\\
     *
     * @example { "Alert name":"{{ .commonLabels.alertname }}{{if .commonLabels.clustername }}", "Cluster name":"{{ .commonLabels.clustername }} {{ end }}{{if eq "app" .commonLabels._aliyun_arms_involvedObject_kind }}", "Application name":"{{ .commonLabels._aliyun_arms_involvedObject_name }} {{ end }}", "Notification policy":"{{ .dispatchRuleName }}", "Alert time":"{{ .startTime }}", "Alert content":"{{ for .alerts }} {{ .annotations.message }} {{ end }}" }
     *
     * @var string
     */
    public $body;

    /**
     * @description The HTTP request method.
     *
     *   Post
     *   Get
     *
     * This parameter is required.
     * @example Post
     *
     * @var string
     */
    public $method;

    /**
     * @description The notification template that is sent when an alert is resolved. This parameter is required if the **Method** parameter is set to **Post**. You can use the `$content` placeholder to specify the notification content. The content cannot exceed 500 characters in length. For more information, see [Variable description of a notification template](https://help.aliyun.com/document_detail/251834.html).
     *
     * @example { "Alert name":"{{ .commonLabels.alertname }}{{if .commonLabels.clustername }}", "Cluster name":"{{ .commonLabels.clustername }} {{ end }}{{if eq "app" .commonLabels._aliyun_arms_involvedObject_kind }}", "Application name":"{{ .commonLabels._aliyun_arms_involvedObject_name }} {{ end }}", "Notification policy":"{{ .dispatchRuleName }}", "Recovery time":"{{ .endTime }}", "Alert content":"{{ for .alerts }} {{ .annotations.message }} {{ end }}" }
     *
     * @var string
     */
    public $recoverBody;

    /**
     * @description The URL of the HTTP request **method**.
     *
     * This parameter is required.
     * @example https://oapi.dingtalk.com/robot/send?access_token=e1a049121******
     *
     * @var string
     */
    public $url;

    /**
     * @description The ID of the webhook alert contact.
     *
     *   If you do not specify this parameter, a new webhook alert contact is created.
     * If you specify this parameter, the specified webhook alert contact is modified.
     *
     * @example 123
     *
     * @var int
     */
    public $webhookId;

    /**
     * @description The name of the webhook alert contact.
     *
     * This parameter is required.
     * @example Webhook alert
     *
     * @var string
     */
    public $webhookName;
    protected $_name = [
        'bizHeaders'  => 'BizHeaders',
        'bizParams'   => 'BizParams',
        'body'        => 'Body',
        'method'      => 'Method',
        'recoverBody' => 'RecoverBody',
        'url'         => 'Url',
        'webhookId'   => 'WebhookId',
        'webhookName' => 'WebhookName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizHeaders) {
            $res['BizHeaders'] = $this->bizHeaders;
        }
        if (null !== $this->bizParams) {
            $res['BizParams'] = $this->bizParams;
        }
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->recoverBody) {
            $res['RecoverBody'] = $this->recoverBody;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->webhookId) {
            $res['WebhookId'] = $this->webhookId;
        }
        if (null !== $this->webhookName) {
            $res['WebhookName'] = $this->webhookName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateWebhookContactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizHeaders'])) {
            $model->bizHeaders = $map['BizHeaders'];
        }
        if (isset($map['BizParams'])) {
            $model->bizParams = $map['BizParams'];
        }
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['RecoverBody'])) {
            $model->recoverBody = $map['RecoverBody'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['WebhookId'])) {
            $model->webhookId = $map['WebhookId'];
        }
        if (isset($map['WebhookName'])) {
            $model->webhookName = $map['WebhookName'];
        }

        return $model;
    }
}
