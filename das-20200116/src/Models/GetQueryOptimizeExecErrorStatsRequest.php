<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class GetQueryOptimizeExecErrorStatsRequest extends Model
{
    /**
     * @var string
     */
    public $asc;
    /**
     * @var string
     */
    public $dbNames;
    /**
     * @var string
     */
    public $engine;
    /**
     * @var string
     */
    public $instanceIds;
    /**
     * @var string
     */
    public $keywords;
    /**
     * @var string
     */
    public $logicalOperator;
    /**
     * @var string
     */
    public $orderBy;
    /**
     * @var string
     */
    public $pageNo;
    /**
     * @var string
     */
    public $pageSize;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'asc'             => 'Asc',
        'dbNames'         => 'DbNames',
        'engine'          => 'Engine',
        'instanceIds'     => 'InstanceIds',
        'keywords'        => 'Keywords',
        'logicalOperator' => 'LogicalOperator',
        'orderBy'         => 'OrderBy',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'region'          => 'Region',
        'time'            => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asc) {
            $res['Asc'] = $this->asc;
        }

        if (null !== $this->dbNames) {
            $res['DbNames'] = $this->dbNames;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }

        if (null !== $this->logicalOperator) {
            $res['LogicalOperator'] = $this->logicalOperator;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Asc'])) {
            $model->asc = $map['Asc'];
        }

        if (isset($map['DbNames'])) {
            $model->dbNames = $map['DbNames'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }

        if (isset($map['LogicalOperator'])) {
            $model->logicalOperator = $map['LogicalOperator'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
