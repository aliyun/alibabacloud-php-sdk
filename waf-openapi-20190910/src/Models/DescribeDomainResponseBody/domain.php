<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody;

use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody\domain\cloudNativeInstances;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody\domain\logHeaders;
use AlibabaCloud\Tea\Model;

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
     * @var string[]
     */
    public $http2Port;

    /**
     * @var string[]
     */
    public $httpPort;

    /**
     * @var int
     */
    public $httpToUserIp;

    /**
     * @var string[]
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
        'loadBalancing'        => 'LoadBalancing',
        'logHeaders'           => 'LogHeaders',
        'readTime'             => 'ReadTime',
        'resourceGroupId'      => 'ResourceGroupId',
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
