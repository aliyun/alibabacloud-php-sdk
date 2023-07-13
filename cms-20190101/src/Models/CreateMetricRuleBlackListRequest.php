<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateMetricRuleBlackListRequest\metrics;
use AlibabaCloud\Tea\Model;

class CreateMetricRuleBlackListRequest extends Model
{
    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example ecs
     *
     * @var string
     */
    public $category;

    /**
     * @description The ID of the application group. The value of this parameter is a JSON array.
     *
     * >  This parameter is required only if the `ScopeType` parameter is set to `GROUP`.
     * @example 03:00-04:59
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The operation that you want to perform. Set the value to **CreateMetricRuleBlackList**.
     *
     * @example 1640608200000
     *
     * @var string
     */
    public $enableEndTime;

    /**
     * @description The ID of the blacklist policy.
     *
     * @example 1640237400000
     *
     * @var string
     */
    public $enableStartTime;

    /**
     * @var string[]
     */
    public $instances;

    /**
     * @var metrics[]
     */
    public $metrics;

    /**
     * @description The category of the cloud service. For example, ApsaraDB for Redis includes the following categories: ApsaraDB for Redis (standard architecture), ApsaraDB for Redis (cluster architecture), and ApsaraDB for Redis (read/write splitting architecture). In this case, the valid values of this parameter for ApsaraDB for Redis include `kvstore_standard`, `kvstore_sharding`, and `kvstore_splitrw`.
     *
     * @example Blacklist-01
     *
     * @var string
     */
    public $name;

    /**
     * @description The timestamp when the blacklist policy expires.
     *
     * Unit: milliseconds.
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
     * @description The IDs of instances that belong to the specified cloud service. The value of this parameter is a JSON array.
     *
     * Valid values of N: 1 to 20.
     * @example USER
     *
     * @var string
     */
    public $scopeType;

    /**
     * @description The extended dimension of the instance. For example, `{"device":"C:"}` specifies that the blacklist policy is applied to all C disks of the specified Elastic Compute Service (ECS) instance.
     *
     * Valid values of N: 1 to 10
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
     * @return CreateMetricRuleBlackListRequest
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
