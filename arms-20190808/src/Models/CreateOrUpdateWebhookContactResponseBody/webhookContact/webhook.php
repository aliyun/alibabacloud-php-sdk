<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateWebhookContactResponseBody\webhookContact;

use AlibabaCloud\Tea\Model;

class webhook extends Model
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
     * @description The alert notification template.
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
     * @example Post
     *
     * @var string
     */
    public $method;

    /**
     * @description The notification template for clearing alerts.
     *
     * @example { "Alert name":"{{ .commonLabels.alertname }}{{if .commonLabels.clustername }}", "Cluster name":"{{ .commonLabels.clustername }} {{ end }}{{if eq "app" .commonLabels._aliyun_arms_involvedObject_kind }}", "Application name":"{{ .commonLabels._aliyun_arms_involvedObject_name }} {{ end }}", "Notification policy":"{{ .dispatchRuleName }}", "Recovery time":"{{ .endTime }}", "Alert content":"{{ for .alerts }} {{ .annotations.message }} {{ end }}" }
     *
     * @var string
     */
    public $recoverBody;

    /**
     * @description The URL of the request method.
     *
     * @example https://oapi.dingtalk.com/robot/send?access_token=e1a049121******
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'bizHeaders'  => 'BizHeaders',
        'bizParams'   => 'BizParams',
        'body'        => 'Body',
        'method'      => 'Method',
        'recoverBody' => 'RecoverBody',
        'url'         => 'Url',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return webhook
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

        return $model;
    }
}
