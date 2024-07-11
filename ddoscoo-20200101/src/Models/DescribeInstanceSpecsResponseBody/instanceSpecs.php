<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceSpecsResponseBody;

use AlibabaCloud\Tea\Model;

class instanceSpecs extends Model
{
    /**
     * @description The clean bandwidth. Unit: Mbit/s.
     *
     * @example 100
     *
     * @var int
     */
    public $bandwidthMbps;

    /**
     * @description The basic protection bandwidth. Unit: Gbit/s.
     *
     * @example 30
     *
     * @var int
     */
    public $baseBandwidth;

    /**
     * @description The specification of concurrent connections of the instance.
     *
     * @example 100000
     *
     * @var int
     */
    public $connLimit;

    /**
     * @description The specification of new connections of the instance.
     *
     * @example 5000
     *
     * @var int
     */
    public $cpsLimit;

    /**
     * @description The number of available advanced mitigation sessions for this month. **-1**: unlimited
     *
     * >  This parameter is returned only when the request parameter **RegionId** is set to **ap-southeast-1**. If RegionId is set to ap-southeast-1, the specifications of Anti-DDoS Proxy (Outside Chinese Mainland) instances are queried.
     * @example 2
     *
     * @var int
     */
    public $defenseCount;

    /**
     * @description The number of domain names that can be protected by the instance.
     *
     * @example 50
     *
     * @var int
     */
    public $domainLimit;

    /**
     * @description The burstable protection bandwidth. Unit: Gbit/s.
     *
     * @example 30
     *
     * @var int
     */
    public $elasticBandwidth;

    /**
     * @description The burstable clean bandwidth. Unit: Mbit/s.
     *
     * @example 300
     *
     * @var int
     */
    public $elasticBw;

    /**
     * @description The metering method of the burstable clean bandwidth. Valid values:
     *
     *   **day**: the metering method of daily 95th percentile
     *   **month**: the metering method of monthly 95th percentile
     *
     * @example day
     *
     * @var string
     */
    public $elasticBwModel;

    /**
     * @description The burstable QPS. Unit: QPS
     *
     * @example 10
     *
     * @var int
     */
    public $elasticQps;

    /**
     * @description The metering method of the burstable QPS. Valid values:
     *
     *   **day**: the metering method of daily 95th percentile
     *   **month**: the metering method of monthly 95th percentile
     *
     * @example day
     *
     * @var string
     */
    public $elasticQpsMode;

    /**
     * @description The function plan of the instance. Valid values:
     *
     *   **default**: Standard
     *   **enhance**: Enhanced
     *   **cnhk**: Chinese Mainland Acceleration (CMA)
     *   **cnhk_default**: Secure Chinese Mainland Acceleration (Sec-CMA) standard
     *   **cnhk_enhance**: Sec-CMA enhanced
     *
     * @example default
     *
     * @var string
     */
    public $functionVersion;

    /**
     * @description The ID of the instance.
     *
     * @example ddoscoo-cn-zvp2eibz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of ports that can be protected by the instance.
     *
     * @example 50
     *
     * @var int
     */
    public $portLimit;

    /**
     * @description The clean QPS.
     *
     * @example 3000
     *
     * @var int
     */
    public $qpsLimit;

    /**
     * @description The threshold of the clean bandwidth. Valid values: 0 to 15360. The value 0 indicates that rate limiting is never triggered. Unit: Mbit/s
     *
     * @example 0
     *
     * @var int
     */
    public $realLimitBw;

    /**
     * @description The number of sites that can be protected by the instance.
     *
     * @example 5
     *
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
