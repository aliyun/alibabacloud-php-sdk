<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class DescribeAlertingMetricRuleResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $alertBeforeTime;

    /**
     * @var string
     */
    public $dimensions;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'alertBeforeTime' => 'AlertBeforeTime',
        'dimensions' => 'Dimensions',
        'groupId' => 'GroupId',
        'namespace' => 'Namespace',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'ruleId' => 'RuleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertBeforeTime) {
            $res['AlertBeforeTime'] = $this->alertBeforeTime;
        }

        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
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
        if (isset($map['AlertBeforeTime'])) {
            $model->alertBeforeTime = $map['AlertBeforeTime'];
        }

        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
