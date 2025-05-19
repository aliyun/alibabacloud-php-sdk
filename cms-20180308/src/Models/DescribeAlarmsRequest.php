<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models;

use AlibabaCloud\Dara\Model;

class DescribeAlarmsRequest extends Model
{
    /**
     * @var string
     */
    public $alertState;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $enableState;

    /**
     * @var string
     */
    public $groupBy;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $nameKeyword;

    /**
     * @var string
     */
    public $names;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $page;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'alertState' => 'AlertState',
        'displayName' => 'DisplayName',
        'enableState' => 'EnableState',
        'groupBy' => 'GroupBy',
        'groupId' => 'GroupId',
        'metricName' => 'MetricName',
        'nameKeyword' => 'NameKeyword',
        'names' => 'Names',
        'namespace' => 'Namespace',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertState) {
            $res['AlertState'] = $this->alertState;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->enableState) {
            $res['EnableState'] = $this->enableState;
        }

        if (null !== $this->groupBy) {
            $res['GroupBy'] = $this->groupBy;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->nameKeyword) {
            $res['NameKeyword'] = $this->nameKeyword;
        }

        if (null !== $this->names) {
            $res['Names'] = $this->names;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertState'])) {
            $model->alertState = $map['AlertState'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['EnableState'])) {
            $model->enableState = $map['EnableState'];
        }

        if (isset($map['GroupBy'])) {
            $model->groupBy = $map['GroupBy'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['NameKeyword'])) {
            $model->nameKeyword = $map['NameKeyword'];
        }

        if (isset($map['Names'])) {
            $model->names = $map['Names'];
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

        return $model;
    }
}
