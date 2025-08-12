<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleBlackListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleBlackListResponseBody\describeMetricRuleBlackList\metrics;

class describeMetricRuleBlackList extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var int
     */
    public $enableEndTime;

    /**
     * @var int
     */
    public $enableStartTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string[]
     */
    public $instances;

    /**
     * @var bool
     */
    public $isEnable;

    /**
     * @var metrics[]
     */
    public $metrics;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $scopeType;

    /**
     * @var string[]
     */
    public $scopeValue;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'category' => 'Category',
        'createTime' => 'CreateTime',
        'effectiveTime' => 'EffectiveTime',
        'enableEndTime' => 'EnableEndTime',
        'enableStartTime' => 'EnableStartTime',
        'id' => 'Id',
        'instances' => 'Instances',
        'isEnable' => 'IsEnable',
        'metrics' => 'Metrics',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'scopeType' => 'ScopeType',
        'scopeValue' => 'ScopeValue',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        if (\is_array($this->metrics)) {
            Model::validateArray($this->metrics);
        }
        if (\is_array($this->scopeValue)) {
            Model::validateArray($this->scopeValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->instances)) {
                $res['Instances'] = [];
                $n1 = 0;
                foreach ($this->instances as $item1) {
                    $res['Instances'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isEnable) {
            $res['IsEnable'] = $this->isEnable;
        }

        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['Metrics'] = [];
                $n1 = 0;
                foreach ($this->metrics as $item1) {
                    $res['Metrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->scopeValue)) {
                $res['ScopeValue'] = [];
                $n1 = 0;
                foreach ($this->scopeValue as $item1) {
                    $res['ScopeValue'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
                $model->instances = [];
                $n1 = 0;
                foreach ($map['Instances'] as $item1) {
                    $model->instances[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IsEnable'])) {
            $model->isEnable = $map['IsEnable'];
        }

        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n1 = 0;
                foreach ($map['Metrics'] as $item1) {
                    $model->metrics[$n1] = metrics::fromMap($item1);
                    ++$n1;
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
                $model->scopeValue = [];
                $n1 = 0;
                foreach ($map['ScopeValue'] as $item1) {
                    $model->scopeValue[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
