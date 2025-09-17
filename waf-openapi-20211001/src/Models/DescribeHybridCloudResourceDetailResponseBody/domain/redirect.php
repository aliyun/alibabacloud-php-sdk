<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourceDetailResponseBody\domain;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudResourceDetailResponseBody\domain\redirect\requestHeaders;

class redirect extends Model
{
    /**
     * @var string[]
     */
    public $backends;

    /**
     * @var bool
     */
    public $cnameEnabled;

    /**
     * @var int
     */
    public $connectTimeout;

    /**
     * @var bool
     */
    public $focusHttpBackend;

    /**
     * @var bool
     */
    public $keepalive;

    /**
     * @var int
     */
    public $keepaliveRequests;

    /**
     * @var int
     */
    public $keepaliveTimeout;

    /**
     * @var string
     */
    public $loadbalance;

    /**
     * @var int
     */
    public $readTimeout;

    /**
     * @var requestHeaders[]
     */
    public $requestHeaders;

    /**
     * @var bool
     */
    public $retry;

    /**
     * @var string
     */
    public $routingRules;

    /**
     * @var bool
     */
    public $sniEnabled;

    /**
     * @var string
     */
    public $sniHost;

    /**
     * @var int
     */
    public $writeTimeout;
    protected $_name = [
        'backends' => 'Backends',
        'cnameEnabled' => 'CnameEnabled',
        'connectTimeout' => 'ConnectTimeout',
        'focusHttpBackend' => 'FocusHttpBackend',
        'keepalive' => 'Keepalive',
        'keepaliveRequests' => 'KeepaliveRequests',
        'keepaliveTimeout' => 'KeepaliveTimeout',
        'loadbalance' => 'Loadbalance',
        'readTimeout' => 'ReadTimeout',
        'requestHeaders' => 'RequestHeaders',
        'retry' => 'Retry',
        'routingRules' => 'RoutingRules',
        'sniEnabled' => 'SniEnabled',
        'sniHost' => 'SniHost',
        'writeTimeout' => 'WriteTimeout',
    ];

    public function validate()
    {
        if (\is_array($this->backends)) {
            Model::validateArray($this->backends);
        }
        if (\is_array($this->requestHeaders)) {
            Model::validateArray($this->requestHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backends) {
            if (\is_array($this->backends)) {
                $res['Backends'] = [];
                $n1 = 0;
                foreach ($this->backends as $item1) {
                    $res['Backends'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cnameEnabled) {
            $res['CnameEnabled'] = $this->cnameEnabled;
        }

        if (null !== $this->connectTimeout) {
            $res['ConnectTimeout'] = $this->connectTimeout;
        }

        if (null !== $this->focusHttpBackend) {
            $res['FocusHttpBackend'] = $this->focusHttpBackend;
        }

        if (null !== $this->keepalive) {
            $res['Keepalive'] = $this->keepalive;
        }

        if (null !== $this->keepaliveRequests) {
            $res['KeepaliveRequests'] = $this->keepaliveRequests;
        }

        if (null !== $this->keepaliveTimeout) {
            $res['KeepaliveTimeout'] = $this->keepaliveTimeout;
        }

        if (null !== $this->loadbalance) {
            $res['Loadbalance'] = $this->loadbalance;
        }

        if (null !== $this->readTimeout) {
            $res['ReadTimeout'] = $this->readTimeout;
        }

        if (null !== $this->requestHeaders) {
            if (\is_array($this->requestHeaders)) {
                $res['RequestHeaders'] = [];
                $n1 = 0;
                foreach ($this->requestHeaders as $item1) {
                    $res['RequestHeaders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->retry) {
            $res['Retry'] = $this->retry;
        }

        if (null !== $this->routingRules) {
            $res['RoutingRules'] = $this->routingRules;
        }

        if (null !== $this->sniEnabled) {
            $res['SniEnabled'] = $this->sniEnabled;
        }

        if (null !== $this->sniHost) {
            $res['SniHost'] = $this->sniHost;
        }

        if (null !== $this->writeTimeout) {
            $res['WriteTimeout'] = $this->writeTimeout;
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
        if (isset($map['Backends'])) {
            if (!empty($map['Backends'])) {
                $model->backends = [];
                $n1 = 0;
                foreach ($map['Backends'] as $item1) {
                    $model->backends[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CnameEnabled'])) {
            $model->cnameEnabled = $map['CnameEnabled'];
        }

        if (isset($map['ConnectTimeout'])) {
            $model->connectTimeout = $map['ConnectTimeout'];
        }

        if (isset($map['FocusHttpBackend'])) {
            $model->focusHttpBackend = $map['FocusHttpBackend'];
        }

        if (isset($map['Keepalive'])) {
            $model->keepalive = $map['Keepalive'];
        }

        if (isset($map['KeepaliveRequests'])) {
            $model->keepaliveRequests = $map['KeepaliveRequests'];
        }

        if (isset($map['KeepaliveTimeout'])) {
            $model->keepaliveTimeout = $map['KeepaliveTimeout'];
        }

        if (isset($map['Loadbalance'])) {
            $model->loadbalance = $map['Loadbalance'];
        }

        if (isset($map['ReadTimeout'])) {
            $model->readTimeout = $map['ReadTimeout'];
        }

        if (isset($map['RequestHeaders'])) {
            if (!empty($map['RequestHeaders'])) {
                $model->requestHeaders = [];
                $n1 = 0;
                foreach ($map['RequestHeaders'] as $item1) {
                    $model->requestHeaders[$n1] = requestHeaders::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Retry'])) {
            $model->retry = $map['Retry'];
        }

        if (isset($map['RoutingRules'])) {
            $model->routingRules = $map['RoutingRules'];
        }

        if (isset($map['SniEnabled'])) {
            $model->sniEnabled = $map['SniEnabled'];
        }

        if (isset($map['SniHost'])) {
            $model->sniHost = $map['SniHost'];
        }

        if (isset($map['WriteTimeout'])) {
            $model->writeTimeout = $map['WriteTimeout'];
        }

        return $model;
    }
}
