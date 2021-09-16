<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableMetricsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $groupKey;

    /**
     * @var int
     */
    public $sortRule;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $metricsKey;

    /**
     * @var string
     */
    public $groupKeyType;

    /**
     * @var string
     */
    public $metricsKeyAlias;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $dimension;
    protected $_name = [
        'groupKey'        => 'GroupKey',
        'sortRule'        => 'SortRule',
        'description'     => 'Description',
        'unit'            => 'Unit',
        'metricsKey'      => 'MetricsKey',
        'groupKeyType'    => 'GroupKeyType',
        'metricsKeyAlias' => 'MetricsKeyAlias',
        'method'          => 'Method',
        'dimension'       => 'Dimension',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupKey) {
            $res['GroupKey'] = $this->groupKey;
        }
        if (null !== $this->sortRule) {
            $res['SortRule'] = $this->sortRule;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->metricsKey) {
            $res['MetricsKey'] = $this->metricsKey;
        }
        if (null !== $this->groupKeyType) {
            $res['GroupKeyType'] = $this->groupKeyType;
        }
        if (null !== $this->metricsKeyAlias) {
            $res['MetricsKeyAlias'] = $this->metricsKeyAlias;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupKey'])) {
            $model->groupKey = $map['GroupKey'];
        }
        if (isset($map['SortRule'])) {
            $model->sortRule = $map['SortRule'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['MetricsKey'])) {
            $model->metricsKey = $map['MetricsKey'];
        }
        if (isset($map['GroupKeyType'])) {
            $model->groupKeyType = $map['GroupKeyType'];
        }
        if (isset($map['MetricsKeyAlias'])) {
            $model->metricsKeyAlias = $map['MetricsKeyAlias'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }

        return $model;
    }
}
