<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\redirect\backendPorts;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\redirect\backends;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\redirect\backupBackends;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainDetailResponseBody\redirect\requestHeaders;

class redirect extends Model
{
    /**
     * @var string[]
     */
    public $backUpBackendList;

    /**
     * @var string[]
     */
    public $backendList;

    /**
     * @var backendPorts[]
     */
    public $backendPorts;

    /**
     * @var backends[]
     */
    public $backends;

    /**
     * @var backupBackends[]
     */
    public $backupBackends;

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
    public $http2Origin;

    /**
     * @var int
     */
    public $http2OriginMaxConcurrency;

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
    public $maxBodySize;

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
     * @var bool
     */
    public $sniEnabled;

    /**
     * @var string
     */
    public $sniHost;

    /**
     * @var bool
     */
    public $WLProxyClientIp;

    /**
     * @var bool
     */
    public $webServerType;

    /**
     * @var int
     */
    public $writeTimeout;

    /**
     * @var bool
     */
    public $XClientIp;

    /**
     * @var bool
     */
    public $XTrueIp;

    /**
     * @var bool
     */
    public $xffProto;
    protected $_name = [
        'backUpBackendList' => 'BackUpBackendList',
        'backendList' => 'BackendList',
        'backendPorts' => 'BackendPorts',
        'backends' => 'Backends',
        'backupBackends' => 'BackupBackends',
        'connectTimeout' => 'ConnectTimeout',
        'focusHttpBackend' => 'FocusHttpBackend',
        'http2Origin' => 'Http2Origin',
        'http2OriginMaxConcurrency' => 'Http2OriginMaxConcurrency',
        'keepalive' => 'Keepalive',
        'keepaliveRequests' => 'KeepaliveRequests',
        'keepaliveTimeout' => 'KeepaliveTimeout',
        'loadbalance' => 'Loadbalance',
        'maxBodySize' => 'MaxBodySize',
        'readTimeout' => 'ReadTimeout',
        'requestHeaders' => 'RequestHeaders',
        'retry' => 'Retry',
        'sniEnabled' => 'SniEnabled',
        'sniHost' => 'SniHost',
        'WLProxyClientIp' => 'WLProxyClientIp',
        'webServerType' => 'WebServerType',
        'writeTimeout' => 'WriteTimeout',
        'XClientIp' => 'XClientIp',
        'XTrueIp' => 'XTrueIp',
        'xffProto' => 'XffProto',
    ];

    public function validate()
    {
        if (\is_array($this->backUpBackendList)) {
            Model::validateArray($this->backUpBackendList);
        }
        if (\is_array($this->backendList)) {
            Model::validateArray($this->backendList);
        }
        if (\is_array($this->backendPorts)) {
            Model::validateArray($this->backendPorts);
        }
        if (\is_array($this->backends)) {
            Model::validateArray($this->backends);
        }
        if (\is_array($this->backupBackends)) {
            Model::validateArray($this->backupBackends);
        }
        if (\is_array($this->requestHeaders)) {
            Model::validateArray($this->requestHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backUpBackendList) {
            if (\is_array($this->backUpBackendList)) {
                $res['BackUpBackendList'] = [];
                $n1 = 0;
                foreach ($this->backUpBackendList as $item1) {
                    $res['BackUpBackendList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->backendList) {
            if (\is_array($this->backendList)) {
                $res['BackendList'] = [];
                $n1 = 0;
                foreach ($this->backendList as $item1) {
                    $res['BackendList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->backendPorts) {
            if (\is_array($this->backendPorts)) {
                $res['BackendPorts'] = [];
                $n1 = 0;
                foreach ($this->backendPorts as $item1) {
                    $res['BackendPorts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->backends) {
            if (\is_array($this->backends)) {
                $res['Backends'] = [];
                $n1 = 0;
                foreach ($this->backends as $item1) {
                    $res['Backends'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->backupBackends) {
            if (\is_array($this->backupBackends)) {
                $res['BackupBackends'] = [];
                $n1 = 0;
                foreach ($this->backupBackends as $item1) {
                    $res['BackupBackends'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->connectTimeout) {
            $res['ConnectTimeout'] = $this->connectTimeout;
        }

        if (null !== $this->focusHttpBackend) {
            $res['FocusHttpBackend'] = $this->focusHttpBackend;
        }

        if (null !== $this->http2Origin) {
            $res['Http2Origin'] = $this->http2Origin;
        }

        if (null !== $this->http2OriginMaxConcurrency) {
            $res['Http2OriginMaxConcurrency'] = $this->http2OriginMaxConcurrency;
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

        if (null !== $this->maxBodySize) {
            $res['MaxBodySize'] = $this->maxBodySize;
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

        if (null !== $this->sniEnabled) {
            $res['SniEnabled'] = $this->sniEnabled;
        }

        if (null !== $this->sniHost) {
            $res['SniHost'] = $this->sniHost;
        }

        if (null !== $this->WLProxyClientIp) {
            $res['WLProxyClientIp'] = $this->WLProxyClientIp;
        }

        if (null !== $this->webServerType) {
            $res['WebServerType'] = $this->webServerType;
        }

        if (null !== $this->writeTimeout) {
            $res['WriteTimeout'] = $this->writeTimeout;
        }

        if (null !== $this->XClientIp) {
            $res['XClientIp'] = $this->XClientIp;
        }

        if (null !== $this->XTrueIp) {
            $res['XTrueIp'] = $this->XTrueIp;
        }

        if (null !== $this->xffProto) {
            $res['XffProto'] = $this->xffProto;
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
        if (isset($map['BackUpBackendList'])) {
            if (!empty($map['BackUpBackendList'])) {
                $model->backUpBackendList = [];
                $n1 = 0;
                foreach ($map['BackUpBackendList'] as $item1) {
                    $model->backUpBackendList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BackendList'])) {
            if (!empty($map['BackendList'])) {
                $model->backendList = [];
                $n1 = 0;
                foreach ($map['BackendList'] as $item1) {
                    $model->backendList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BackendPorts'])) {
            if (!empty($map['BackendPorts'])) {
                $model->backendPorts = [];
                $n1 = 0;
                foreach ($map['BackendPorts'] as $item1) {
                    $model->backendPorts[$n1] = backendPorts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Backends'])) {
            if (!empty($map['Backends'])) {
                $model->backends = [];
                $n1 = 0;
                foreach ($map['Backends'] as $item1) {
                    $model->backends[$n1] = backends::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BackupBackends'])) {
            if (!empty($map['BackupBackends'])) {
                $model->backupBackends = [];
                $n1 = 0;
                foreach ($map['BackupBackends'] as $item1) {
                    $model->backupBackends[$n1] = backupBackends::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ConnectTimeout'])) {
            $model->connectTimeout = $map['ConnectTimeout'];
        }

        if (isset($map['FocusHttpBackend'])) {
            $model->focusHttpBackend = $map['FocusHttpBackend'];
        }

        if (isset($map['Http2Origin'])) {
            $model->http2Origin = $map['Http2Origin'];
        }

        if (isset($map['Http2OriginMaxConcurrency'])) {
            $model->http2OriginMaxConcurrency = $map['Http2OriginMaxConcurrency'];
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

        if (isset($map['MaxBodySize'])) {
            $model->maxBodySize = $map['MaxBodySize'];
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

        if (isset($map['SniEnabled'])) {
            $model->sniEnabled = $map['SniEnabled'];
        }

        if (isset($map['SniHost'])) {
            $model->sniHost = $map['SniHost'];
        }

        if (isset($map['WLProxyClientIp'])) {
            $model->WLProxyClientIp = $map['WLProxyClientIp'];
        }

        if (isset($map['WebServerType'])) {
            $model->webServerType = $map['WebServerType'];
        }

        if (isset($map['WriteTimeout'])) {
            $model->writeTimeout = $map['WriteTimeout'];
        }

        if (isset($map['XClientIp'])) {
            $model->XClientIp = $map['XClientIp'];
        }

        if (isset($map['XTrueIp'])) {
            $model->XTrueIp = $map['XTrueIp'];
        }

        if (isset($map['XffProto'])) {
            $model->xffProto = $map['XffProto'];
        }

        return $model;
    }
}
