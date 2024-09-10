<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleBlackListResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleBlackListResponseBody\describeMetricRuleBlackList\metrics;
use AlibabaCloud\Tea\Model;

class describeMetricRuleBlackList extends Model
{
    /**
     * @description The category of the cloud service. For example, ApsaraDB for Redis includes the following categories: ApsaraDB for Redis (standard architecture), ApsaraDB for Redis (cluster architecture), and ApsaraDB for Redis (read/write splitting architecture). In this case, the valid values of this parameter for ApsaraDB for Redis include `kvstore_standard`, `kvstore_sharding`, and `kvstore_splitrw`.
     *
     * @example ecs
     *
     * @var string
     */
    public $category;

    /**
     * @description The timestamp when the blacklist policy was created.
     *
     * Unit: milliseconds.
     * @example 1665714561000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time range within which the blacklist policy is effective.
     *
     * @example 00:00-23:59
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The timestamp when the blacklist policy started to take effect.
     *
     * Unit: milliseconds.
     * @example 1640608200000
     *
     * @var int
     */
    public $enableEndTime;

    /**
     * @description The timestamp when the blacklist policy expired.
     *
     * Unit: milliseconds.
     * @example 1640237400000
     *
     * @var int
     */
    public $enableStartTime;

    /**
     * @description The ID of the blacklist policy.
     *
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
     * @description The status of the blacklist policy. Valid values:
     *
     *   true: The blacklist policy is enabled.
     *   false: The blacklist policy is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $isEnable;

    /**
     * @description The metrics of the instance.
     *
     * @var metrics[]
     */
    public $metrics;

    /**
     * @description The name of the blacklist policy.
     *
     * @example Blacklist-01
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace of the cloud service.
     *
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The effective scope of the blacklist policy. Valid values:
     *
     *   USER: The blacklist policy takes effect only within the current Alibaba Cloud account.
     *   GROUP: The blacklist policy takes effect only within the specified application group.
     *
     * @example USER
     *
     * @var string
     */
    public $scopeType;

    /**
     * @description The IDs of the application groups.
     *
     * @var string[]
     */
    public $scopeValue;

    /**
     * @description The timestamp when the blacklist policy was modified.
     *
     * Unit: milliseconds.
     * @example 1665718373000
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'category'        => 'Category',
        'createTime'      => 'CreateTime',
        'effectiveTime'   => 'EffectiveTime',
        'enableEndTime'   => 'EnableEndTime',
        'enableStartTime' => 'EnableStartTime',
        'id'              => 'Id',
        'instances'       => 'Instances',
        'isEnable'        => 'IsEnable',
        'metrics'         => 'Metrics',
        'name'            => 'Name',
        'namespace'       => 'Namespace',
        'scopeType'       => 'ScopeType',
        'scopeValue'      => 'ScopeValue',
        'updateTime'      => 'UpdateTime',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->isEnable) {
            $res['IsEnable'] = $this->isEnable;
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
        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }
        if (null !== $this->scopeValue) {
            $res['ScopeValue'] = $this->scopeValue;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return describeMetricRuleBlackList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['IsEnable'])) {
            $model->isEnable = $map['IsEnable'];
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
        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }
        if (isset($map['ScopeValue'])) {
            if (!empty($map['ScopeValue'])) {
                $model->scopeValue = $map['ScopeValue'];
            }
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
