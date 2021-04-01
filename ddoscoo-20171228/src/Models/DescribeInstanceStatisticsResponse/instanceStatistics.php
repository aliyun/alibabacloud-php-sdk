<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceStatisticsResponse;

use AlibabaCloud\Tea\Model;

class instanceStatistics extends Model
{
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
    public $domainUsage;

    /**
     * @var int
     */
    public $siteUsage;

    /**
     * @var int
     */
    public $defenseCountUsage;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'portUsage'         => 'PortUsage',
        'domainUsage'       => 'DomainUsage',
        'siteUsage'         => 'SiteUsage',
        'defenseCountUsage' => 'DefenseCountUsage',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('portUsage', $this->portUsage, true);
        Model::validateRequired('domainUsage', $this->domainUsage, true);
        Model::validateRequired('siteUsage', $this->siteUsage, true);
        Model::validateRequired('defenseCountUsage', $this->defenseCountUsage, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->portUsage) {
            $res['PortUsage'] = $this->portUsage;
        }
        if (null !== $this->domainUsage) {
            $res['DomainUsage'] = $this->domainUsage;
        }
        if (null !== $this->siteUsage) {
            $res['SiteUsage'] = $this->siteUsage;
        }
        if (null !== $this->defenseCountUsage) {
            $res['DefenseCountUsage'] = $this->defenseCountUsage;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PortUsage'])) {
            $model->portUsage = $map['PortUsage'];
        }
        if (isset($map['DomainUsage'])) {
            $model->domainUsage = $map['DomainUsage'];
        }
        if (isset($map['SiteUsage'])) {
            $model->siteUsage = $map['SiteUsage'];
        }
        if (isset($map['DefenseCountUsage'])) {
            $model->defenseCountUsage = $map['DefenseCountUsage'];
        }

        return $model;
    }
}
