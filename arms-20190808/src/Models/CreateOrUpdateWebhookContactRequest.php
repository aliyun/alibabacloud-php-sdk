<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateWebhookContactRequest extends Model
{
    /**
     * @var string
     */
    public $bizHeaders;

    /**
     * @var string
     */
    public $bizParams;

    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $recoverBody;

    /**
     * @var string
     */
    public $url;

    /**
     * @var int
     */
    public $webhookId;

    /**
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
