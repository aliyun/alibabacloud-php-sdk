<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateWebhookContactResponseBody\webhookContact;

use AlibabaCloud\Dara\Model;

class webhook extends Model
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
    protected $_name = [
        'bizHeaders' => 'BizHeaders',
        'bizParams' => 'BizParams',
        'body' => 'Body',
        'method' => 'Method',
        'recoverBody' => 'RecoverBody',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
