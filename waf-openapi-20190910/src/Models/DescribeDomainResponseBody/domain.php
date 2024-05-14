<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody;

use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody\domain\cloudNativeInstances;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody\domain\logHeaders;
use AlibabaCloud\Tea\Model;

class domain extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $accessHeaderMode;

    /**
     * @var string[]
     */
    public $accessHeaders;

    /**
     * @example waf-cloud-dns
     *
     * @var string
     */
    public $accessType;

    /**
     * @var cloudNativeInstances[]
     */
    public $cloudNativeInstances;

    /**
     * @example 0
     *
     * @var int
     */
    public $clusterType;

    /**
     * @example kdmqyi3ck7xogegxpiyfpb0fj21mgkxn.****.com
     *
     * @var string
     */
    public $cname;

    /**
     * @example 5
     *
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
     * @example 0
     *
     * @var int
     */
    public $httpToUserIp;

    /**
     * @var int[]
     */
    public $httpsPort;

    /**
     * @example 0
     *
     * @var int
     */
    public $httpsRedirect;

    /**
     * @example 1
     *
     * @var int
     */
    public $ipFollowStatus;

    /**
     * @example 1
     *
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
     * @example 2
     *
     * @var int
     */
    public $loadBalancing;

    /**
     * @var logHeaders[]
     */
    public $logHeaders;

    /**
     * @example 120
     *
     * @var int
     */
    public $readTime;

    /**
     * @example rg-acfm2mkrunv****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $retry;

    /**
     * @example waf.example.com
     *
     * @var string
     */
    public $sniHost;

    /**
     * @example 1
     *
     * @var int
     */
    public $sniStatus;

    /**
     * @var string[]
     */
    public $sourceIps;

    /**
     * @example 40
     *
     * @var int
     */
    public $version;

    /**
     * @example 120
     *
     * @var int
     */
    public $writeTime;
    protected $_name = [
        'accessHeaderMode'     => 'AccessHeaderMode',
        'accessHeaders'        => 'AccessHeaders',
        'accessType'           => 'AccessType',
        'cloudNativeInstances' => 'CloudNativeInstances',
        'clusterType'          => 'ClusterType',
        'cname'                => 'Cname',
        'connectionTime'       => 'ConnectionTime',
        'http2Port'            => 'Http2Port',
        'httpPort'             => 'HttpPort',
        'httpToUserIp'         => 'HttpToUserIp',
        'httpsPort'            => 'HttpsPort',
        'httpsRedirect'        => 'HttpsRedirect',
        'ipFollowStatus'       => 'IpFollowStatus',
        'isAccessProduct'      => 'IsAccessProduct',
        'keepalive'            => 'Keepalive',
        'keepaliveRequests'    => 'KeepaliveRequests',
        'keepaliveTimeout'     => 'KeepaliveTimeout',
        'loadBalancing'        => 'LoadBalancing',
        'logHeaders'           => 'LogHeaders',
        'readTime'             => 'ReadTime',
        'resourceGroupId'      => 'ResourceGroupId',
        'retry'                => 'Retry',
        'sniHost'              => 'SniHost',
        'sniStatus'            => 'SniStatus',
        'sourceIps'            => 'SourceIps',
        'version'              => 'Version',
        'writeTime'            => 'WriteTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessHeaderMode) {
            $res['AccessHeaderMode'] = $this->accessHeaderMode;
        }
        if (null !== $this->accessHeaders) {
            $res['AccessHeaders'] = $this->accessHeaders;
        }
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->cloudNativeInstances) {
            $res['CloudNativeInstances'] = [];
            if (null !== $this->cloudNativeInstances && \is_array($this->cloudNativeInstances)) {
                $n = 0;
                foreach ($this->cloudNativeInstances as $item) {
                    $res['CloudNativeInstances'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Http2Port'] = $this->http2Port;
        }
        if (null !== $this->httpPort) {
            $res['HttpPort'] = $this->httpPort;
        }
        if (null !== $this->httpToUserIp) {
            $res['HttpToUserIp'] = $this->httpToUserIp;
        }
        if (null !== $this->httpsPort) {
            $res['HttpsPort'] = $this->httpsPort;
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
            $res['LogHeaders'] = [];
            if (null !== $this->logHeaders && \is_array($this->logHeaders)) {
                $n = 0;
                foreach ($this->logHeaders as $item) {
                    $res['LogHeaders'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['SourceIps'] = $this->sourceIps;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->writeTime) {
            $res['WriteTime'] = $this->writeTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessHeaderMode'])) {
            $model->accessHeaderMode = $map['AccessHeaderMode'];
        }
        if (isset($map['AccessHeaders'])) {
            if (!empty($map['AccessHeaders'])) {
                $model->accessHeaders = $map['AccessHeaders'];
            }
        }
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['CloudNativeInstances'])) {
            if (!empty($map['CloudNativeInstances'])) {
                $model->cloudNativeInstances = [];
                $n                           = 0;
                foreach ($map['CloudNativeInstances'] as $item) {
                    $model->cloudNativeInstances[$n++] = null !== $item ? cloudNativeInstances::fromMap($item) : $item;
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
                $model->http2Port = $map['Http2Port'];
            }
        }
        if (isset($map['HttpPort'])) {
            if (!empty($map['HttpPort'])) {
                $model->httpPort = $map['HttpPort'];
            }
        }
        if (isset($map['HttpToUserIp'])) {
            $model->httpToUserIp = $map['HttpToUserIp'];
        }
        if (isset($map['HttpsPort'])) {
            if (!empty($map['HttpsPort'])) {
                $model->httpsPort = $map['HttpsPort'];
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
                $n                 = 0;
                foreach ($map['LogHeaders'] as $item) {
                    $model->logHeaders[$n++] = null !== $item ? logHeaders::fromMap($item) : $item;
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
                $model->sourceIps = $map['SourceIps'];
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
