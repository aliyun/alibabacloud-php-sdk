<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainAdvanceConfigsResponseBody\domainConfigs;

use AlibabaCloud\Tea\Model;

class profile extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $certStatus;

    /**
     * @example 0
     *
     * @var int
     */
    public $clusterType;

    /**
     * @example ****dsbpkt75zeiok5mta2j5l7hggcrm.****.com
     *
     * @var string
     */
    public $cname;

    /**
     * @example 0
     *
     * @var int
     */
    public $exclusiveVipStatus;

    /**
     * @example on
     *
     * @var string
     */
    public $GSLBStatus;

    /**
     * @var int[]
     */
    public $http2Port;

    /**
     * @var int[]
     */
    public $httpPort;

    /**
     * @var int[]
     */
    public $httpsPort;

    /**
     * @example 1
     *
     * @var int
     */
    public $ipv6Status;

    /**
     * @example 0
     *
     * @var int
     */
    public $resolvedType;

    /**
     * @example ["39.XX.XX.197"]
     *
     * @var string[]
     */
    public $rs;

    /**
     * @example 0
     *
     * @var int
     */
    public $vipServiceStatus;
    protected $_name = [
        'certStatus'         => 'CertStatus',
        'clusterType'        => 'ClusterType',
        'cname'              => 'Cname',
        'exclusiveVipStatus' => 'ExclusiveVipStatus',
        'GSLBStatus'         => 'GSLBStatus',
        'http2Port'          => 'Http2Port',
        'httpPort'           => 'HttpPort',
        'httpsPort'          => 'HttpsPort',
        'ipv6Status'         => 'Ipv6Status',
        'resolvedType'       => 'ResolvedType',
        'rs'                 => 'Rs',
        'vipServiceStatus'   => 'VipServiceStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certStatus) {
            $res['CertStatus'] = $this->certStatus;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->exclusiveVipStatus) {
            $res['ExclusiveVipStatus'] = $this->exclusiveVipStatus;
        }
        if (null !== $this->GSLBStatus) {
            $res['GSLBStatus'] = $this->GSLBStatus;
        }
        if (null !== $this->http2Port) {
            $res['Http2Port'] = $this->http2Port;
        }
        if (null !== $this->httpPort) {
            $res['HttpPort'] = $this->httpPort;
        }
        if (null !== $this->httpsPort) {
            $res['HttpsPort'] = $this->httpsPort;
        }
        if (null !== $this->ipv6Status) {
            $res['Ipv6Status'] = $this->ipv6Status;
        }
        if (null !== $this->resolvedType) {
            $res['ResolvedType'] = $this->resolvedType;
        }
        if (null !== $this->rs) {
            $res['Rs'] = $this->rs;
        }
        if (null !== $this->vipServiceStatus) {
            $res['VipServiceStatus'] = $this->vipServiceStatus;
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
        if (isset($map['CertStatus'])) {
            $model->certStatus = $map['CertStatus'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['ExclusiveVipStatus'])) {
            $model->exclusiveVipStatus = $map['ExclusiveVipStatus'];
        }
        if (isset($map['GSLBStatus'])) {
            $model->GSLBStatus = $map['GSLBStatus'];
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
        if (isset($map['HttpsPort'])) {
            if (!empty($map['HttpsPort'])) {
                $model->httpsPort = $map['HttpsPort'];
            }
        }
        if (isset($map['Ipv6Status'])) {
            $model->ipv6Status = $map['Ipv6Status'];
        }
        if (isset($map['ResolvedType'])) {
            $model->resolvedType = $map['ResolvedType'];
        }
        if (isset($map['Rs'])) {
            if (!empty($map['Rs'])) {
                $model->rs = $map['Rs'];
            }
        }
        if (isset($map['VipServiceStatus'])) {
            $model->vipServiceStatus = $map['VipServiceStatus'];
        }

        return $model;
    }
}
