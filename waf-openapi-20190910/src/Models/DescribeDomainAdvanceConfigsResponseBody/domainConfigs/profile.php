<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainAdvanceConfigsResponseBody\domainConfigs;

use AlibabaCloud\Tea\Model;

class profile extends Model
{
    /**
     * @var string
     */
    public $http2Port;

    /**
     * @var int
     */
    public $ipv6Status;

    /**
     * @var string
     */
    public $httpPort;

    /**
     * @var string
     */
    public $GSLBStatus;

    /**
     * @var string
     */
    public $rs;

    /**
     * @var int
     */
    public $vipServiceStatus;

    /**
     * @var int
     */
    public $clusterType;

    /**
     * @var int
     */
    public $exclusiveVipStatus;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var int
     */
    public $certStatus;

    /**
     * @var string
     */
    public $httpsPort;

    /**
     * @var int
     */
    public $resolvedType;
    protected $_name = [
        'http2Port'          => 'Http2Port',
        'ipv6Status'         => 'Ipv6Status',
        'httpPort'           => 'HttpPort',
        'GSLBStatus'         => 'GSLBStatus',
        'rs'                 => 'Rs',
        'vipServiceStatus'   => 'VipServiceStatus',
        'clusterType'        => 'ClusterType',
        'exclusiveVipStatus' => 'ExclusiveVipStatus',
        'cname'              => 'Cname',
        'certStatus'         => 'CertStatus',
        'httpsPort'          => 'HttpsPort',
        'resolvedType'       => 'ResolvedType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->http2Port) {
            $res['Http2Port'] = $this->http2Port;
        }
        if (null !== $this->ipv6Status) {
            $res['Ipv6Status'] = $this->ipv6Status;
        }
        if (null !== $this->httpPort) {
            $res['HttpPort'] = $this->httpPort;
        }
        if (null !== $this->GSLBStatus) {
            $res['GSLBStatus'] = $this->GSLBStatus;
        }
        if (null !== $this->rs) {
            $res['Rs'] = $this->rs;
        }
        if (null !== $this->vipServiceStatus) {
            $res['VipServiceStatus'] = $this->vipServiceStatus;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->exclusiveVipStatus) {
            $res['ExclusiveVipStatus'] = $this->exclusiveVipStatus;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->certStatus) {
            $res['CertStatus'] = $this->certStatus;
        }
        if (null !== $this->httpsPort) {
            $res['HttpsPort'] = $this->httpsPort;
        }
        if (null !== $this->resolvedType) {
            $res['ResolvedType'] = $this->resolvedType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return profile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Http2Port'])) {
            $model->http2Port = $map['Http2Port'];
        }
        if (isset($map['Ipv6Status'])) {
            $model->ipv6Status = $map['Ipv6Status'];
        }
        if (isset($map['HttpPort'])) {
            $model->httpPort = $map['HttpPort'];
        }
        if (isset($map['GSLBStatus'])) {
            $model->GSLBStatus = $map['GSLBStatus'];
        }
        if (isset($map['Rs'])) {
            $model->rs = $map['Rs'];
        }
        if (isset($map['VipServiceStatus'])) {
            $model->vipServiceStatus = $map['VipServiceStatus'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ExclusiveVipStatus'])) {
            $model->exclusiveVipStatus = $map['ExclusiveVipStatus'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['CertStatus'])) {
            $model->certStatus = $map['CertStatus'];
        }
        if (isset($map['HttpsPort'])) {
            $model->httpsPort = $map['HttpsPort'];
        }
        if (isset($map['ResolvedType'])) {
            $model->resolvedType = $map['ResolvedType'];
        }

        return $model;
    }
}
