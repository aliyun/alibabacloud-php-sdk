<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class instanceStatistics extends Model
{
    /**
     * @var int
     */
    public $defenseCountUsage;

    /**
     * @var int
     */
    public $domainUsage;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $portUsage;

    /**
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
