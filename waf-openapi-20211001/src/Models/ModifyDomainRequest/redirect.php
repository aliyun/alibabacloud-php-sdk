<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainRequest;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainRequest\redirect\requestHeaders;
use AlibabaCloud\Tea\Model;

class redirect extends Model
{
    /**
     * @var string[]
     */
    public $backends;

    /**
     * @var int
     */
    public $connectTimeout;

    /**
     * @var bool
     */
    public $focusHttpBackend;

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
        'backends'         => 'Backends',
        'connectTimeout'   => 'ConnectTimeout',
        'focusHttpBackend' => 'FocusHttpBackend',
        'loadbalance'      => 'Loadbalance',
        'readTimeout'      => 'ReadTimeout',
        'requestHeaders'   => 'RequestHeaders',
        'sniEnabled'       => 'SniEnabled',
        'sniHost'          => 'SniHost',
        'writeTimeout'     => 'WriteTimeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backends) {
            $res['Backends'] = $this->backends;
        }
        if (null !== $this->connectTimeout) {
            $res['ConnectTimeout'] = $this->connectTimeout;
        }
        if (null !== $this->focusHttpBackend) {
            $res['FocusHttpBackend'] = $this->focusHttpBackend;
        }
        if (null !== $this->loadbalance) {
            $res['Loadbalance'] = $this->loadbalance;
        }
        if (null !== $this->readTimeout) {
            $res['ReadTimeout'] = $this->readTimeout;
        }
        if (null !== $this->requestHeaders) {
            $res['RequestHeaders'] = [];
            if (null !== $this->requestHeaders && \is_array($this->requestHeaders)) {
                $n = 0;
                foreach ($this->requestHeaders as $item) {
                    $res['RequestHeaders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

    /**
     * @param array $map
     *
     * @return redirect
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Backends'])) {
            if (!empty($map['Backends'])) {
                $model->backends = $map['Backends'];
            }
        }
        if (isset($map['ConnectTimeout'])) {
            $model->connectTimeout = $map['ConnectTimeout'];
        }
        if (isset($map['FocusHttpBackend'])) {
            $model->focusHttpBackend = $map['FocusHttpBackend'];
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
                $n                     = 0;
                foreach ($map['RequestHeaders'] as $item) {
                    $model->requestHeaders[$n++] = null !== $item ? requestHeaders::fromMap($item) : $item;
                }
            }
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
