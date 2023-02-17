<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\Configuration;

use AlibabaCloud\Tea\Model;

class queryList extends Model
{
    /**
     * @var string
     */
    public $powerSqlMode;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $start;

    /**
     * @var string
     */
    public $store;

    /**
     * @var string
     */
    public $storeType;

    /**
     * @var string
     */
    public $timeSpanType;
    protected $_name = [
        'powerSqlMode' => 'powerSqlMode',
        'project'      => 'project',
        'query'        => 'query',
        'region'       => 'region',
        'roleArn'      => 'roleArn',
        'start'        => 'start',
        'store'        => 'store',
        'storeType'    => 'storeType',
        'timeSpanType' => 'timeSpanType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->powerSqlMode) {
            $res['powerSqlMode'] = $this->powerSqlMode;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }
        if (null !== $this->store) {
            $res['store'] = $this->store;
        }
        if (null !== $this->storeType) {
            $res['storeType'] = $this->storeType;
        }
        if (null !== $this->timeSpanType) {
            $res['timeSpanType'] = $this->timeSpanType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['powerSqlMode'])) {
            $model->powerSqlMode = $map['powerSqlMode'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }
        if (isset($map['start'])) {
            $model->start = $map['start'];
        }
        if (isset($map['store'])) {
            $model->store = $map['store'];
        }
        if (isset($map['storeType'])) {
            $model->storeType = $map['storeType'];
        }
        if (isset($map['timeSpanType'])) {
            $model->timeSpanType = $map['timeSpanType'];
        }

        return $model;
    }
}
