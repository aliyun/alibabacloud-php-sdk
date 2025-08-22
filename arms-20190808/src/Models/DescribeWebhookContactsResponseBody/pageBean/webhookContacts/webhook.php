<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeWebhookContactsResponseBody\pageBean\webhookContacts;

use AlibabaCloud\Dara\Model;

class webhook extends Model
{
    /**
     * @var mixed[]
     */
    public $bizHeaders;

    /**
     * @var mixed[]
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
        if (\is_array($this->bizHeaders)) {
            Model::validateArray($this->bizHeaders);
        }
        if (\is_array($this->bizParams)) {
            Model::validateArray($this->bizParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizHeaders) {
            if (\is_array($this->bizHeaders)) {
                $res['BizHeaders'] = [];
                foreach ($this->bizHeaders as $key1 => $value1) {
                    $res['BizHeaders'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->bizParams) {
            if (\is_array($this->bizParams)) {
                $res['BizParams'] = [];
                foreach ($this->bizParams as $key1 => $value1) {
                    $res['BizParams'][$key1] = $value1;
                }
            }
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
            if (!empty($map['BizHeaders'])) {
                $model->bizHeaders = [];
                foreach ($map['BizHeaders'] as $key1 => $value1) {
                    $model->bizHeaders[$key1] = $value1;
                }
            }
        }

        if (isset($map['BizParams'])) {
            if (!empty($map['BizParams'])) {
                $model->bizParams = [];
                foreach ($map['BizParams'] as $key1 => $value1) {
                    $model->bizParams[$key1] = $value1;
                }
            }
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
