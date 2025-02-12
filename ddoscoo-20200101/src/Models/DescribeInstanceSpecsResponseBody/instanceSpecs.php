<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceSpecsResponseBody;

use AlibabaCloud\Dara\Model;

class instanceSpecs extends Model
{
    /**
     * @var int
     */
    public $bandwidthMbps;
    /**
     * @var int
     */
    public $baseBandwidth;
    /**
     * @var int
     */
    public $connLimit;
    /**
     * @var int
     */
    public $cpsLimit;
    /**
     * @var int
     */
    public $defenseCount;
    /**
     * @var int
     */
    public $domainLimit;
    /**
     * @var int
     */
    public $elasticBandwidth;
    /**
     * @var int
     */
    public $elasticBw;
    /**
     * @var string
     */
    public $elasticBwModel;
    /**
     * @var int
     */
    public $elasticQps;
    /**
     * @var string
     */
    public $elasticQpsMode;
    /**
     * @var string
     */
    public $functionVersion;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $portLimit;
    /**
     * @var int
     */
    public $qpsLimit;
    /**
     * @var int
     */
    public $realLimitBw;
    /**
     * @var int
     */
    public $siteLimit;
    protected $_name = [
        'bandwidthMbps'    => 'BandwidthMbps',
        'baseBandwidth'    => 'BaseBandwidth',
        'connLimit'        => 'ConnLimit',
        'cpsLimit'         => 'CpsLimit',
        'defenseCount'     => 'DefenseCount',
        'domainLimit'      => 'DomainLimit',
        'elasticBandwidth' => 'ElasticBandwidth',
        'elasticBw'        => 'ElasticBw',
        'elasticBwModel'   => 'ElasticBwModel',
        'elasticQps'       => 'ElasticQps',
        'elasticQpsMode'   => 'ElasticQpsMode',
        'functionVersion'  => 'FunctionVersion',
        'instanceId'       => 'InstanceId',
        'portLimit'        => 'PortLimit',
        'qpsLimit'         => 'QpsLimit',
        'realLimitBw'      => 'RealLimitBw',
        'siteLimit'        => 'SiteLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidthMbps) {
            $res['BandwidthMbps'] = $this->bandwidthMbps;
        }

        if (null !== $this->baseBandwidth) {
            $res['BaseBandwidth'] = $this->baseBandwidth;
        }

        if (null !== $this->connLimit) {
            $res['ConnLimit'] = $this->connLimit;
        }

        if (null !== $this->cpsLimit) {
            $res['CpsLimit'] = $this->cpsLimit;
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

        if (null !== $this->elasticBw) {
            $res['ElasticBw'] = $this->elasticBw;
        }

        if (null !== $this->elasticBwModel) {
            $res['ElasticBwModel'] = $this->elasticBwModel;
        }

        if (null !== $this->elasticQps) {
            $res['ElasticQps'] = $this->elasticQps;
        }

        if (null !== $this->elasticQpsMode) {
            $res['ElasticQpsMode'] = $this->elasticQpsMode;
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

        if (null !== $this->realLimitBw) {
            $res['RealLimitBw'] = $this->realLimitBw;
        }

        if (null !== $this->siteLimit) {
            $res['SiteLimit'] = $this->siteLimit;
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
        if (isset($map['BandwidthMbps'])) {
            $model->bandwidthMbps = $map['BandwidthMbps'];
        }

        if (isset($map['BaseBandwidth'])) {
            $model->baseBandwidth = $map['BaseBandwidth'];
        }

        if (isset($map['ConnLimit'])) {
            $model->connLimit = $map['ConnLimit'];
        }

        if (isset($map['CpsLimit'])) {
            $model->cpsLimit = $map['CpsLimit'];
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

        if (isset($map['ElasticBw'])) {
            $model->elasticBw = $map['ElasticBw'];
        }

        if (isset($map['ElasticBwModel'])) {
            $model->elasticBwModel = $map['ElasticBwModel'];
        }

        if (isset($map['ElasticQps'])) {
            $model->elasticQps = $map['ElasticQps'];
        }

        if (isset($map['ElasticQpsMode'])) {
            $model->elasticQpsMode = $map['ElasticQpsMode'];
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

        if (isset($map['RealLimitBw'])) {
            $model->realLimitBw = $map['RealLimitBw'];
        }

        if (isset($map['SiteLimit'])) {
            $model->siteLimit = $map['SiteLimit'];
        }

        return $model;
    }
}
