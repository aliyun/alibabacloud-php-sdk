<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class instanceStatistics extends Model
{
    /**
     * @description The number of advanced mitigation sessions that are used in this month.
     *
     * >  This parameter is returned only if Anti-DDoS Proxy (Outside Chinese Mainland) instances are queried.
     * @example 1
     *
     * @var int
     */
    public $defenseCountUsage;

    /**
     * @description The number of domain names that are protected by the instance.
     *
     * @example 1
     *
     * @var int
     */
    public $domainUsage;

    /**
     * @description The ID of the instance.
     *
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of ports that are protected by the instance.
     *
     * @example 2
     *
     * @var int
     */
    public $portUsage;

    /**
     * @description The number of websites that are protected by the instance.
     *
     * @example 1
     *
     * @var int
     */
    public $siteUsage;
    protected $_name = [
        'defenseCountUsage' => 'DefenseCountUsage',
        'domainUsage'       => 'DomainUsage',
        'instanceId'        => 'InstanceId',
        'portUsage'         => 'PortUsage',
        'siteUsage'         => 'SiteUsage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseCountUsage) {
            $res['DefenseCountUsage'] = $this->defenseCountUsage;
        }
        if (null !== $this->domainUsage) {
            $res['DomainUsage'] = $this->domainUsage;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->portUsage) {
            $res['PortUsage'] = $this->portUsage;
        }
        if (null !== $this->siteUsage) {
            $res['SiteUsage'] = $this->siteUsage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceStatistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseCountUsage'])) {
            $model->defenseCountUsage = $map['DefenseCountUsage'];
        }
        if (isset($map['DomainUsage'])) {
            $model->domainUsage = $map['DomainUsage'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PortUsage'])) {
            $model->portUsage = $map['PortUsage'];
        }
        if (isset($map['SiteUsage'])) {
            $model->siteUsage = $map['SiteUsage'];
        }

        return $model;
    }
}
