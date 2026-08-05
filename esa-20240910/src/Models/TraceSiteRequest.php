<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\TraceSiteRequest\body;
use AlibabaCloud\SDK\ESA\V20240910\Models\TraceSiteRequest\context;
use AlibabaCloud\SDK\ESA\V20240910\Models\TraceSiteRequest\cookies;
use AlibabaCloud\SDK\ESA\V20240910\Models\TraceSiteRequest\headers;

class TraceSiteRequest extends Model
{
    /**
     * @var body
     */
    public $body;

    /**
     * @var context
     */
    public $context;

    /**
     * @var cookies[]
     */
    public $cookies;

    /**
     * @var headers[]
     */
    public $headers;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'body' => 'Body',
        'context' => 'Context',
        'cookies' => 'Cookies',
        'headers' => 'Headers',
        'method' => 'Method',
        'protocol' => 'Protocol',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (null !== $this->body) {
            $this->body->validate();
        }
        if (null !== $this->context) {
            $this->context->validate();
        }
        if (\is_array($this->cookies)) {
            Model::validateArray($this->cookies);
        }
        if (\is_array($this->headers)) {
            Model::validateArray($this->headers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
        }

        if (null !== $this->context) {
            $res['Context'] = null !== $this->context ? $this->context->toArray($noStream) : $this->context;
        }

        if (null !== $this->cookies) {
            if (\is_array($this->cookies)) {
                $res['Cookies'] = [];
                $n1 = 0;
                foreach ($this->cookies as $item1) {
                    $res['Cookies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->headers) {
            if (\is_array($this->headers)) {
                $res['Headers'] = [];
                $n1 = 0;
                foreach ($this->headers as $item1) {
                    $res['Headers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (isset($map['Body'])) {
            $model->body = body::fromMap($map['Body']);
        }

        if (isset($map['Context'])) {
            $model->context = context::fromMap($map['Context']);
        }

        if (isset($map['Cookies'])) {
            if (!empty($map['Cookies'])) {
                $model->cookies = [];
                $n1 = 0;
                foreach ($map['Cookies'] as $item1) {
                    $model->cookies[$n1] = cookies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Headers'])) {
            if (!empty($map['Headers'])) {
                $model->headers = [];
                $n1 = 0;
                foreach ($map['Headers'] as $item1) {
                    $model->headers[$n1] = headers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
