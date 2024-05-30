<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListCalcEnginesRequest extends Model
{
    /**
     * @description The type of the compute engine instance. Valid values: `ODPS`, `EMR`, `BLINK`, `HOLO`, `MaxGraph`, `HYBRIDDB_FOR_POSTGRESQL`, `ADB_MYSQL`, and `HADOOP_CDH`. The values are not case-sensitive.
     *
     * This parameter is required.
     * @example ODPS
     *
     * @var string
     */
    public $calcEngineType;

    /**
     * @description The environment in which the compute engine instance runs. Valid values: DEV and PRD. The value DEV indicates the development environment, and the value PRD indicates the production environment.
     *
     * @example PRD
     *
     * @var string
     */
    public $envType;

    /**
     * @description The name of the compute engine instance that you want to query. Only exact match is supported.
     *
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 100. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The DataWorks workspace with which the compute engine instances are associated.
     *
     * This parameter is required.
     * @example 27
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'calcEngineType' => 'CalcEngineType',
        'envType'        => 'EnvType',
        'name'           => 'Name',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'projectId'      => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calcEngineType) {
            $res['CalcEngineType'] = $this->calcEngineType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCalcEnginesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalcEngineType'])) {
            $model->calcEngineType = $map['CalcEngineType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
