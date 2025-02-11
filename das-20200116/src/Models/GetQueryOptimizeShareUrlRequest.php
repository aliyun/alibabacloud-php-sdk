<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class GetQueryOptimizeShareUrlRequest extends Model
{
    /**
     * @var bool
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
     * @var bool
     */
    public $onlyOptimizedSql;
    /**
     * @var string
     */
    public $orderBy;
    /**
     * @var int
     */
    public $pageNo;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $rules;
    /**
     * @var string
     */
    public $sqlIds;
    /**
     * @var string
     */
    public $tagNames;
    /**
     * @var int
     */
    public $time;
    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'asc'              => 'Asc',
        'dbNames'          => 'DbNames',
        'engine'           => 'Engine',
        'instanceIds'      => 'InstanceIds',
        'keywords'         => 'Keywords',
        'logicalOperator'  => 'LogicalOperator',
        'onlyOptimizedSql' => 'OnlyOptimizedSql',
        'orderBy'          => 'OrderBy',
        'pageNo'           => 'PageNo',
        'pageSize'         => 'PageSize',
        'region'           => 'Region',
        'rules'            => 'Rules',
        'sqlIds'           => 'SqlIds',
        'tagNames'         => 'TagNames',
        'time'             => 'Time',
        'user'             => 'User',
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

        if (null !== $this->onlyOptimizedSql) {
            $res['OnlyOptimizedSql'] = $this->onlyOptimizedSql;
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

        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }

        if (null !== $this->sqlIds) {
            $res['SqlIds'] = $this->sqlIds;
        }

        if (null !== $this->tagNames) {
            $res['TagNames'] = $this->tagNames;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
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

        if (isset($map['OnlyOptimizedSql'])) {
            $model->onlyOptimizedSql = $map['OnlyOptimizedSql'];
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

        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }

        if (isset($map['SqlIds'])) {
            $model->sqlIds = $map['SqlIds'];
        }

        if (isset($map['TagNames'])) {
            $model->tagNames = $map['TagNames'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
