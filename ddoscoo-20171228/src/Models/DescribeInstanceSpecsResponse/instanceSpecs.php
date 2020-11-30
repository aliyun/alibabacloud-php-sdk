<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceSpecsResponse;

use AlibabaCloud\Tea\Model;

class instanceSpecs extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $baseBandwidth;

    /**
     * @var int
     */
    public $elasticBandwidth;

    /**
     * @var int
     */
    public $portLimit;

    /**
     * @var int
     */
    public $siteLimit;

    /**
     * @var int
     */
    public $domainLimit;

    /**
     * @var int
     */
    public $bandwidthMbps;

    /**
     * @var int
     */
    public $defenseCount;

    /**
     * @var string
     */
    public $functionVersion;

    /**
     * @var int
     */
    public $qpsLimit;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'baseBandwidth'    => 'BaseBandwidth',
        'elasticBandwidth' => 'ElasticBandwidth',
        'portLimit'        => 'PortLimit',
        'siteLimit'        => 'SiteLimit',
        'domainLimit'      => 'DomainLimit',
        'bandwidthMbps'    => 'BandwidthMbps',
        'defenseCount'     => 'DefenseCount',
        'functionVersion'  => 'FunctionVersion',
        'qpsLimit'         => 'QpsLimit',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('baseBandwidth', $this->baseBandwidth, true);
        Model::validateRequired('elasticBandwidth', $this->elasticBandwidth, true);
        Model::validateRequired('portLimit', $this->portLimit, true);
        Model::validateRequired('siteLimit', $this->siteLimit, true);
        Model::validateRequired('domainLimit', $this->domainLimit, true);
        Model::validateRequired('bandwidthMbps', $this->bandwidthMbps, true);
        Model::validateRequired('defenseCount', $this->defenseCount, true);
        Model::validateRequired('functionVersion', $this->functionVersion, true);
        Model::validateRequired('qpsLimit', $this->qpsLimit, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->baseBandwidth) {
            $res['BaseBandwidth'] = $this->baseBandwidth;
        }
        if (null !== $this->elasticBandwidth) {
            $res['ElasticBandwidth'] = $this->elasticBandwidth;
        }
        if (null !== $this->portLimit) {
            $res['PortLimit'] = $this->portLimit;
        }
        if (null !== $this->siteLimit) {
            $res['SiteLimit'] = $this->siteLimit;
        }
        if (null !== $this->domainLimit) {
            $res['DomainLimit'] = $this->domainLimit;
        }
        if (null !== $this->bandwidthMbps) {
            $res['BandwidthMbps'] = $this->bandwidthMbps;
        }
        if (null !== $this->defenseCount) {
            $res['DefenseCount'] = $this->defenseCount;
        }
        if (null !== $this->functionVersion) {
            $res['FunctionVersion'] = $this->functionVersion;
        }
        if (null !== $this->qpsLimit) {
            $res['QpsLimit'] = $this->qpsLimit;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['BaseBandwidth'])) {
            $model->baseBandwidth = $map['BaseBandwidth'];
        }
        if (isset($map['ElasticBandwidth'])) {
            $model->elasticBandwidth = $map['ElasticBandwidth'];
        }
        if (isset($map['PortLimit'])) {
            $model->portLimit = $map['PortLimit'];
        }
        if (isset($map['SiteLimit'])) {
            $model->siteLimit = $map['SiteLimit'];
        }
        if (isset($map['DomainLimit'])) {
            $model->domainLimit = $map['DomainLimit'];
        }
        if (isset($map['BandwidthMbps'])) {
            $model->bandwidthMbps = $map['BandwidthMbps'];
        }
        if (isset($map['DefenseCount'])) {
            $model->defenseCount = $map['DefenseCount'];
        }
        if (isset($map['FunctionVersion'])) {
            $model->functionVersion = $map['FunctionVersion'];
        }
        if (isset($map['QpsLimit'])) {
            $model->qpsLimit = $map['QpsLimit'];
        }

        return $model;
    }
}
