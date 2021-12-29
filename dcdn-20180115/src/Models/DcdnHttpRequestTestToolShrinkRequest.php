<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DcdnHttpRequestTestToolShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $args;

    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $headerShrink;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $method;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $proxyIp;

    /**
     * @var string
     */
    public $scheme;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'args'         => 'Args',
        'body'         => 'Body',
        'headerShrink' => 'Header',
        'host'         => 'Host',
        'method'       => 'Method',
        'ownerId'      => 'OwnerId',
        'proxyIp'      => 'ProxyIp',
        'scheme'       => 'Scheme',
        'uri'          => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->headerShrink) {
            $res['Header'] = $this->headerShrink;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->proxyIp) {
            $res['ProxyIp'] = $this->proxyIp;
        }
        if (null !== $this->scheme) {
            $res['Scheme'] = $this->scheme;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DcdnHttpRequestTestToolShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Args'])) {
            $model->args = $map['Args'];
        }
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['Header'])) {
            $model->headerShrink = $map['Header'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProxyIp'])) {
            $model->proxyIp = $map['ProxyIp'];
        }
        if (isset($map['Scheme'])) {
            $model->scheme = $map['Scheme'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
