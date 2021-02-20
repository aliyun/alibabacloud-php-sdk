<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceSpecsResponseBody;

use AlibabaCloud\Tea\Model;

class instanceSpecs extends Model
{
    /**
     * @var int
     */
    public $baseBandwidth;

    /**
     * @var int
     */
    public $qpsLimit;

    /**
     * @var int
     */
    public $bandwidthMbps;

    /**
     * @var int
     */
    public $defenseCount;

    /**
     * @var int
     */
    public $siteLimit;

    /**
     * @var int
     */
    public $portLimit;

    /**
     * @var int
     */
    public $elasticBandwidth;

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
    public $domainLimit;
    protected $_name = [
        'baseBandwidth'    => 'BaseBandwidth',
        'qpsLimit'         => 'QpsLimit',
        'bandwidthMbps'    => 'BandwidthMbps',
        'defenseCount'     => 'DefenseCount',
        'siteLimit'        => 'SiteLimit',
        'portLimit'        => 'PortLimit',
        'elasticBandwidth' => 'ElasticBandwidth',
        'functionVersion'  => 'FunctionVersion',
        'instanceId'       => 'InstanceId',
        'domainLimit'      => 'DomainLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseBandwidth) {
            $res['BaseBandwidth'] = $this->baseBandwidth;
        }
        if (null !== $this->qpsLimit) {
            $res['QpsLimit'] = $this->qpsLimit;
        }
        if (null !== $this->bandwidthMbps) {
            $res['BandwidthMbps'] = $this->bandwidthMbps;
        }
        if (null !== $this->defenseCount) {
            $res['DefenseCount'] = $this->defenseCount;
        }
        if (null !== $this->siteLimit) {
            $res['SiteLimit'] = $this->siteLimit;
        }
        if (null !== $this->portLimit) {
            $res['PortLimit'] = $this->portLimit;
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
        if (null !== $this->domainLimit) {
            $res['DomainLimit'] = $this->domainLimit;
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
        if (isset($map['BaseBandwidth'])) {
            $model->baseBandwidth = $map['BaseBandwidth'];
        }
        if (isset($map['QpsLimit'])) {
            $model->qpsLimit = $map['QpsLimit'];
        }
        if (isset($map['BandwidthMbps'])) {
            $model->bandwidthMbps = $map['BandwidthMbps'];
        }
        if (isset($map['DefenseCount'])) {
            $model->defenseCount = $map['DefenseCount'];
        }
        if (isset($map['SiteLimit'])) {
            $model->siteLimit = $map['SiteLimit'];
        }
        if (isset($map['PortLimit'])) {
            $model->portLimit = $map['PortLimit'];
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
        if (isset($map['DomainLimit'])) {
            $model->domainLimit = $map['DomainLimit'];
        }

        return $model;
    }
}
