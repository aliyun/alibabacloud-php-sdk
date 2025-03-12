<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceSpecsResponseBody;

use AlibabaCloud\Tea\Model;

class instanceSpecs extends Model
{
    /**
     * @example 20000
     *
     * @var int
     */
    public $bandwidthMbps;

    /**
     * @example 20
     *
     * @var int
     */
    public $baseBandwidth;

    /**
     * @example 10
     *
     * @var int
     */
    public $defenseCount;

    /**
     * @example 50
     *
     * @var int
     */
    public $domainLimit;

    /**
     * @example 20
     *
     * @var int
     */
    public $elasticBandwidth;

    /**
     * @example default
     *
     * @var string
     */
    public $functionVersion;

    /**
     * @example ddoscoo-cn-XXXXX
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 50
     *
     * @var int
     */
    public $portLimit;

    /**
     * @example 1000
     *
     * @var int
     */
    public $qpsLimit;

    /**
     * @example 10
     *
     * @var int
     */
    public $siteLimit;
    protected $_name = [
        'bandwidthMbps'    => 'BandwidthMbps',
        'baseBandwidth'    => 'BaseBandwidth',
        'defenseCount'     => 'DefenseCount',
        'domainLimit'      => 'DomainLimit',
        'elasticBandwidth' => 'ElasticBandwidth',
        'functionVersion'  => 'FunctionVersion',
        'instanceId'       => 'InstanceId',
        'portLimit'        => 'PortLimit',
        'qpsLimit'         => 'QpsLimit',
        'siteLimit'        => 'SiteLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthMbps) {
            $res['BandwidthMbps'] = $this->bandwidthMbps;
        }
        if (null !== $this->baseBandwidth) {
            $res['BaseBandwidth'] = $this->baseBandwidth;
        }
        if (null !== $this->defenseCount) {
            $res['DefenseCount'] = $this->defenseCount;
        }
        if (null !== $this->domainLimit) {
            $res['DomainLimit'] = $this->domainLimit;
        }
        if (null !== $this->elasticBandwidth) {
            $res['ElasticBandwidth'] = $this->elasticBandwidth;
        }
        if (null !== $this->functionVersion) {
            $res['FunctionVersion'] = $this->functionVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->portLimit) {
            $res['PortLimit'] = $this->portLimit;
        }
        if (null !== $this->qpsLimit) {
            $res['QpsLimit'] = $this->qpsLimit;
        }
        if (null !== $this->siteLimit) {
            $res['SiteLimit'] = $this->siteLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSpecs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthMbps'])) {
            $model->bandwidthMbps = $map['BandwidthMbps'];
        }
        if (isset($map['BaseBandwidth'])) {
            $model->baseBandwidth = $map['BaseBandwidth'];
        }
        if (isset($map['DefenseCount'])) {
            $model->defenseCount = $map['DefenseCount'];
        }
        if (isset($map['DomainLimit'])) {
            $model->domainLimit = $map['DomainLimit'];
        }
        if (isset($map['ElasticBandwidth'])) {
            $model->elasticBandwidth = $map['ElasticBandwidth'];
        }
        if (isset($map['FunctionVersion'])) {
            $model->functionVersion = $map['FunctionVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PortLimit'])) {
            $model->portLimit = $map['PortLimit'];
        }
        if (isset($map['QpsLimit'])) {
            $model->qpsLimit = $map['QpsLimit'];
        }
        if (isset($map['SiteLimit'])) {
            $model->siteLimit = $map['SiteLimit'];
        }

        return $model;
    }
}
