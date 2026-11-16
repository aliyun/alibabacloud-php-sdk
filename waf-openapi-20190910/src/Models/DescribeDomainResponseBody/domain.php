<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody\domain\cloudNativeInstances;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody\domain\logHeaders;

class domain extends Model
{
    /**
     * @var int
     */
    public $accessHeaderMode;

    /**
     * @var string[]
     */
    public $accessHeaders;

    /**
     * @var string
     */
    public $accessType;

    /**
     * @var cloudNativeInstances[]
     */
    public $cloudNativeInstances;

    /**
     * @var int
     */
    public $clusterType;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var int
     */
    public $connectionTime;

    /**
     * @var int[]
     */
    public $http2Port;

    /**
     * @var int[]
     */
    public $httpPort;

    /**
     * @var int
     */
    public $httpToUserIp;

    /**
     * @var int[]
     */
    public $httpsPort;

    /**
     * @var int
     */
    public $httpsRedirect;

    /**
     * @var int
     */
    public $ipFollowStatus;

    /**
     * @var int
     */
    public $isAccessProduct;

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
     * @var int
     */
    public $loadBalancing;

    /**
     * @var logHeaders[]
     */
    public $logHeaders;

    /**
     * @var int
     */
    public $readTime;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $retry;

    /**
     * @var string
     */
    public $sniHost;

    /**
     * @var int
     */
    public $sniStatus;

    /**
     * @var string[]
     */
    public $sourceIps;

    /**
     * @var int
     */
    public $version;

    /**
     * @var int
     */
    public $writeTime;
    protected $_name = [
        'accessHeaderMode' => 'AccessHeaderMode',
        'accessHeaders' => 'AccessHeaders',
        'accessType' => 'AccessType',
        'cloudNativeInstances' => 'CloudNativeInstances',
        'clusterType' => 'ClusterType',
        'cname' => 'Cname',
        'connectionTime' => 'ConnectionTime',
        'http2Port' => 'Http2Port',
        'httpPort' => 'HttpPort',
        'httpToUserIp' => 'HttpToUserIp',
        'httpsPort' => 'HttpsPort',
        'httpsRedirect' => 'HttpsRedirect',
        'ipFollowStatus' => 'IpFollowStatus',
        'isAccessProduct' => 'IsAccessProduct',
        'keepalive' => 'Keepalive',
        'keepaliveRequests' => 'KeepaliveRequests',
        'keepaliveTimeout' => 'KeepaliveTimeout',
        'loadBalancing' => 'LoadBalancing',
        'logHeaders' => 'LogHeaders',
        'readTime' => 'ReadTime',
        'resourceGroupId' => 'ResourceGroupId',
        'retry' => 'Retry',
        'sniHost' => 'SniHost',
        'sniStatus' => 'SniStatus',
        'sourceIps' => 'SourceIps',
        'version' => 'Version',
        'writeTime' => 'WriteTime',
    ];

    public function validate()
    {
        if (\is_array($this->accessHeaders)) {
            Model::validateArray($this->accessHeaders);
        }
        if (\is_array($this->cloudNativeInstances)) {
            Model::validateArray($this->cloudNativeInstances);
        }
        if (\is_array($this->http2Port)) {
            Model::validateArray($this->http2Port);
        }
        if (\is_array($this->httpPort)) {
            Model::validateArray($this->httpPort);
        }
        if (\is_array($this->httpsPort)) {
            Model::validateArray($this->httpsPort);
        }
        if (\is_array($this->logHeaders)) {
            Model::validateArray($this->logHeaders);
        }
        if (\is_array($this->sourceIps)) {
            Model::validateArray($this->sourceIps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessHeaderMode) {
            $res['AccessHeaderMode'] = $this->accessHeaderMode;
        }

        if (null !== $this->accessHeaders) {
            if (\is_array($this->accessHeaders)) {
                $res['AccessHeaders'] = [];
                $n1 = 0;
                foreach ($this->accessHeaders as $item1) {
                    $res['AccessHeaders'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }

        if (null !== $this->cloudNativeInstances) {
            if (\is_array($this->cloudNativeInstances)) {
                $res['CloudNativeInstances'] = [];
                $n1 = 0;
                foreach ($this->cloudNativeInstances as $item1) {
                    $res['CloudNativeInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }

        if (null !== $this->connectionTime) {
            $res['ConnectionTime'] = $this->connectionTime;
        }

        if (null !== $this->http2Port) {
            if (\is_array($this->http2Port)) {
                $res['Http2Port'] = [];
                $n1 = 0;
                foreach ($this->http2Port as $item1) {
                    $res['Http2Port'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpPort) {
            if (\is_array($this->httpPort)) {
                $res['HttpPort'] = [];
                $n1 = 0;
                foreach ($this->httpPort as $item1) {
                    $res['HttpPort'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpToUserIp) {
            $res['HttpToUserIp'] = $this->httpToUserIp;
        }

        if (null !== $this->httpsPort) {
            if (\is_array($this->httpsPort)) {
                $res['HttpsPort'] = [];
                $n1 = 0;
                foreach ($this->httpsPort as $item1) {
                    $res['HttpsPort'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpsRedirect) {
            $res['HttpsRedirect'] = $this->httpsRedirect;
        }

        if (null !== $this->ipFollowStatus) {
            $res['IpFollowStatus'] = $this->ipFollowStatus;
        }

        if (null !== $this->isAccessProduct) {
            $res['IsAccessProduct'] = $this->isAccessProduct;
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

        if (null !== $this->loadBalancing) {
            $res['LoadBalancing'] = $this->loadBalancing;
        }

        if (null !== $this->logHeaders) {
            if (\is_array($this->logHeaders)) {
                $res['LogHeaders'] = [];
                $n1 = 0;
                foreach ($this->logHeaders as $item1) {
                    $res['LogHeaders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->readTime) {
            $res['ReadTime'] = $this->readTime;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->retry) {
            $res['Retry'] = $this->retry;
        }

        if (null !== $this->sniHost) {
            $res['SniHost'] = $this->sniHost;
        }

        if (null !== $this->sniStatus) {
            $res['SniStatus'] = $this->sniStatus;
        }

        if (null !== $this->sourceIps) {
            if (\is_array($this->sourceIps)) {
                $res['SourceIps'] = [];
                $n1 = 0;
                foreach ($this->sourceIps as $item1) {
                    $res['SourceIps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->writeTime) {
            $res['WriteTime'] = $this->writeTime;
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
        if (isset($map['AccessHeaderMode'])) {
            $model->accessHeaderMode = $map['AccessHeaderMode'];
        }

        if (isset($map['AccessHeaders'])) {
            if (!empty($map['AccessHeaders'])) {
                $model->accessHeaders = [];
                $n1 = 0;
                foreach ($map['AccessHeaders'] as $item1) {
                    $model->accessHeaders[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }

        if (isset($map['CloudNativeInstances'])) {
            if (!empty($map['CloudNativeInstances'])) {
                $model->cloudNativeInstances = [];
                $n1 = 0;
                foreach ($map['CloudNativeInstances'] as $item1) {
                    $model->cloudNativeInstances[$n1] = cloudNativeInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }

        if (isset($map['ConnectionTime'])) {
            $model->connectionTime = $map['ConnectionTime'];
        }

        if (isset($map['Http2Port'])) {
            if (!empty($map['Http2Port'])) {
                $model->http2Port = [];
                $n1 = 0;
                foreach ($map['Http2Port'] as $item1) {
                    $model->http2Port[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HttpPort'])) {
            if (!empty($map['HttpPort'])) {
                $model->httpPort = [];
                $n1 = 0;
                foreach ($map['HttpPort'] as $item1) {
                    $model->httpPort[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HttpToUserIp'])) {
            $model->httpToUserIp = $map['HttpToUserIp'];
        }

        if (isset($map['HttpsPort'])) {
            if (!empty($map['HttpsPort'])) {
                $model->httpsPort = [];
                $n1 = 0;
                foreach ($map['HttpsPort'] as $item1) {
                    $model->httpsPort[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HttpsRedirect'])) {
            $model->httpsRedirect = $map['HttpsRedirect'];
        }

        if (isset($map['IpFollowStatus'])) {
            $model->ipFollowStatus = $map['IpFollowStatus'];
        }

        if (isset($map['IsAccessProduct'])) {
            $model->isAccessProduct = $map['IsAccessProduct'];
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

        if (isset($map['LoadBalancing'])) {
            $model->loadBalancing = $map['LoadBalancing'];
        }

        if (isset($map['LogHeaders'])) {
            if (!empty($map['LogHeaders'])) {
                $model->logHeaders = [];
                $n1 = 0;
                foreach ($map['LogHeaders'] as $item1) {
                    $model->logHeaders[$n1] = logHeaders::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ReadTime'])) {
            $model->readTime = $map['ReadTime'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Retry'])) {
            $model->retry = $map['Retry'];
        }

        if (isset($map['SniHost'])) {
            $model->sniHost = $map['SniHost'];
        }

        if (isset($map['SniStatus'])) {
            $model->sniStatus = $map['SniStatus'];
        }

        if (isset($map['SourceIps'])) {
            if (!empty($map['SourceIps'])) {
                $model->sourceIps = [];
                $n1 = 0;
                foreach ($map['SourceIps'] as $item1) {
                    $model->sourceIps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['WriteTime'])) {
            $model->writeTime = $map['WriteTime'];
        }

        return $model;
    }
}
