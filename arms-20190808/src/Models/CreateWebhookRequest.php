<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateWebhookRequest extends Model
{
    /**
     * @description The notification template that is sent when an alert is triggered. This parameter is required if the **Method** parameter is set to **Post**. You can use the $content placeholder to specify the notification content. The content cannot exceed 500 characters in length.
     *
     * This parameter is required.
     * @example { "Alert Name": "{{ .commonLabels.alertname }}{{if .commonLabels.clustername }}", "Cluster Name": "{{ .commonLabels.clustername }} {{ end }}{{if eq " app" .commonLabels._aliyun_arms_involvedObject_kind }}", "Application Name": "{{ .commonLabels._aliyun_arms_involvedObject_name }} {{ end }}", "Notification Policy": "{{ .dispatchRuleName }}", "Alarm Time": "{{ .startTime }}", "Alert Content": "{{ for .alerts }} {{ .annotations.message }} {{ end }}" }
     *
     * @var string
     */
    public $body;

    /**
     * @description The name of the contact.
     *
     * This parameter is required.
     * @example WebhookAlert
     *
     * @var string
     */
    public $contactName;

    /**
     * @description The HTTP request header.
     *
     * @example [{"Content-Type":"application/json"}]
     *
     * @var string
     */
    public $httpHeaders;

    /**
     * @description The parameters in the HTTP request.
     *
     * @example [{"name":"mike"}]
     *
     * @var string
     */
    public $httpParams;

    /**
     * @description The HTTP request method.
     *
     *   `Get`
     *   `Post`
     *
     * This parameter is required.
     * @example Post
     *
     * @var string
     */
    public $method;

    /**
     * @description The notification template that is sent when an alert is resolved. This parameter is required if the **Method** parameter is set to **Post**. You can use the $content placeholder to specify the notification content. The content cannot exceed 500 characters in length.
     *
     * @example { "Alert Name": "{{ .commonLabels.alertname }}{{if .commonLabels.clustername }}", "Cluster Name": "{{ .commonLabels.clustername }} {{ end }}{{if eq " app" .commonLabels._aliyun_arms_involvedObject_kind }}", "Application Name": "{{ .commonLabels._aliyun_arms_involvedObject_name }} {{ end }}", "Notification Policy": "{{ .dispatchRuleName }}", "Alarm Time": "{{ .startTime }}", "Alert Content": "{{ for .alerts }} {{ .annotations.message }} {{ end }}" }
     *
     * @var string
     */
    public $recoverBody;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The URL of the request **method**.
     *
     * This parameter is required.
     * @example https://oapi.dingtalk.com/robot/send?access_token=e1a049121ddbfce1ca963d115ef88cc7219583c4fb79fe6e398fbfb688******
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'body'        => 'Body',
        'contactName' => 'ContactName',
        'httpHeaders' => 'HttpHeaders',
        'httpParams'  => 'HttpParams',
        'method'      => 'Method',
        'recoverBody' => 'RecoverBody',
        'regionId'    => 'RegionId',
        'url'         => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->httpHeaders) {
            $res['HttpHeaders'] = $this->httpHeaders;
        }
        if (null !== $this->httpParams) {
            $res['HttpParams'] = $this->httpParams;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->recoverBody) {
            $res['RecoverBody'] = $this->recoverBody;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWebhookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['HttpHeaders'])) {
            $model->httpHeaders = $map['HttpHeaders'];
        }
        if (isset($map['HttpParams'])) {
            $model->httpParams = $map['HttpParams'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['RecoverBody'])) {
            $model->recoverBody = $map['RecoverBody'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
