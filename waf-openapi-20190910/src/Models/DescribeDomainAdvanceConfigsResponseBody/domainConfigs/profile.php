<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainAdvanceConfigsResponseBody\domainConfigs;

use AlibabaCloud\Dara\Model;

class profile extends Model
{
    /**
     * @var int
     */
    public $certStatus;

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
    public $exclusiveVipStatus;

    /**
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
     * @var int
     */
    public $ipv6Status;

    /**
     * @var int
     */
    public $resolvedType;

    /**
     * @var string[]
     */
    public $rs;

    /**
     * @var int
     */
    public $vipServiceStatus;
    protected $_name = [
        'certStatus' => 'CertStatus',
        'clusterType' => 'ClusterType',
        'cname' => 'Cname',
        'exclusiveVipStatus' => 'ExclusiveVipStatus',
        'GSLBStatus' => 'GSLBStatus',
        'http2Port' => 'Http2Port',
        'httpPort' => 'HttpPort',
        'httpsPort' => 'HttpsPort',
        'ipv6Status' => 'Ipv6Status',
        'resolvedType' => 'ResolvedType',
        'rs' => 'Rs',
        'vipServiceStatus' => 'VipServiceStatus',
    ];

    public function validate()
    {
        if (\is_array($this->http2Port)) {
            Model::validateArray($this->http2Port);
        }
        if (\is_array($this->httpPort)) {
            Model::validateArray($this->httpPort);
        }
        if (\is_array($this->httpsPort)) {
            Model::validateArray($this->httpsPort);
        }
        if (\is_array($this->rs)) {
            Model::validateArray($this->rs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->ipv6Status) {
            $res['Ipv6Status'] = $this->ipv6Status;
        }

        if (null !== $this->resolvedType) {
            $res['ResolvedType'] = $this->resolvedType;
        }

        if (null !== $this->rs) {
            if (\is_array($this->rs)) {
                $res['Rs'] = [];
                $n1 = 0;
                foreach ($this->rs as $item1) {
                    $res['Rs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vipServiceStatus) {
            $res['VipServiceStatus'] = $this->vipServiceStatus;
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

        if (isset($map['Ipv6Status'])) {
            $model->ipv6Status = $map['Ipv6Status'];
        }

        if (isset($map['ResolvedType'])) {
            $model->resolvedType = $map['ResolvedType'];
        }

        if (isset($map['Rs'])) {
            if (!empty($map['Rs'])) {
                $model->rs = [];
                $n1 = 0;
                foreach ($map['Rs'] as $item1) {
                    $model->rs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VipServiceStatus'])) {
            $model->vipServiceStatus = $map['VipServiceStatus'];
        }

        return $model;
    }
}
