<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleBlackListRequest\metrics;
use AlibabaCloud\Tea\Model;

class ModifyMetricRuleBlackListRequest extends Model
{
    /**
     * @description The category of the Alibaba Cloud service. For example, ApsaraDB for Redis includes the following categories: ApsaraDB for Redis (standard architecture), ApsaraDB for Redis (cluster architecture), and ApsaraDB for Redis (read/write splitting architecture). In this case, the valid values of this parameter for ApsaraDB for Redis include `kvstore_standard`, `kvstore_sharding`, and `kvstore_splitrw`.
     *
     * @example ecs
     *
     * @var string
     */
    public $category;

    /**
     * @description The time range within which the blacklist policy is effective. Take note of the following information:
     *
     *   If you do not configure this parameter, the blacklist policy is permanently effective.
     *
     *   If you configure this parameter, the blacklist policy is effective only within the specified time range. Examples:
     *
     *   `03:00-04:59`: The blacklist policy is effective from 03:00 to 05:00 local time. 05:00 local time is excluded.
     *   `03:00-04:59 UTC+0700`: The blacklist policy is effective from 03:00 to 05:00 (UTC+7). 05:00 (UTC+7) is excluded.
     *
     * @example 03:00-04:59
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The timestamp when the blacklist policy expires.
     *
     * Unit: milliseconds.
     * @example 1640608200000
     *
     * @var string
     */
    public $enableEndTime;

    /**
     * @description The timestamp when the blacklist policy starts to take effect.
     *
     * Unit: milliseconds.
     * @example 1640237400000
     *
     * @var string
     */
    public $enableStartTime;

    /**
     * @description The ID of the blacklist policy.
     *
     * For information about how to obtain the ID of a blacklist policy, see [DescribeMetricRuleBlackList](~~457257~~).
     * @example 93514c96-ceb8-47d8-8ee3-93b6d98b****
     *
     * @var string
     */
    public $id;

    /**
     * @description The IDs of the instances that belong to the specified cloud service.
     *
     * @var string[]
     */
    public $instances;

    /**
     * @description The metrics of the instance.
     *
     *   If you do not configure this parameter, the blacklist policy applies to all metrics of the specified cloud service.
     *   If you configure this parameter, the blacklist policy applies only to the current metric.
     *
     * @var metrics[]
     */
    public $metrics;

    /**
     * @description The name of the blacklist policy.
     *
     * @example Blacklist-02
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace of the cloud service.
     *
     * For more information about the namespaces of different cloud services, see [Appendix 1: Metrics](~~163515~~).
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The effective scope of the blacklist policy. Valid values:
     *
     *   USER: The blacklist policy takes effect only within the current Alibaba Cloud account.
     *   GROUP (default): The blacklist policy takes effect only within the specified application group. For information about how to obtain the ID of an application group, see [DescribeMonitorGroups](~~115032~~).
     *
     * @example USER
     *
     * @var string
     */
    public $scopeType;

    /**
     * @description The IDs of the application groups. Specify a JSON array.
     *
     * > This parameter must be specified when `ScopeType` is set to `GROUP`.
     * @example ["67****","78****"]
     *
     * @var string
     */
    public $scopeValue;
    protected $_name = [
        'category'        => 'Category',
        'effectiveTime'   => 'EffectiveTime',
        'enableEndTime'   => 'EnableEndTime',
        'enableStartTime' => 'EnableStartTime',
        'id'              => 'Id',
        'instances'       => 'Instances',
        'metrics'         => 'Metrics',
        'name'            => 'Name',
        'namespace'       => 'Namespace',
        'regionId'        => 'RegionId',
        'scopeType'       => 'ScopeType',
        'scopeValue'      => 'ScopeValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->enableEndTime) {
            $res['EnableEndTime'] = $this->enableEndTime;
        }
        if (null !== $this->enableStartTime) {
            $res['EnableStartTime'] = $this->enableStartTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instances) {
            $res['Instances'] = $this->instances;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = [];
            if (null !== $this->metrics && \is_array($this->metrics)) {
                $n = 0;
                foreach ($this->metrics as $item) {
                    $res['Metrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }
        if (null !== $this->scopeValue) {
            $res['ScopeValue'] = $this->scopeValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyMetricRuleBlackListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['EnableEndTime'])) {
            $model->enableEndTime = $map['EnableEndTime'];
        }
        if (isset($map['EnableStartTime'])) {
            $model->enableStartTime = $map['EnableStartTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = $map['Instances'];
            }
        }
        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n              = 0;
                foreach ($map['Metrics'] as $item) {
                    $model->metrics[$n++] = null !== $item ? metrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }
        if (isset($map['ScopeValue'])) {
            $model->scopeValue = $map['ScopeValue'];
        }

        return $model;
    }
}
