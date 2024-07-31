<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListCalcEnginesRequest extends Model
{
    /**
     * @description The type of the compute engine. The value of this parameter is not case-sensitive. Valid values:
     *
     *   **ODPS**
     *   **EMR**
     *   **BLINK**
     *   **HOLO**
     *   **MaxGraph**
     *   **HYBRIDDB_FOR_POSTGRESQL**
     *   **ADB_MYSQL**
     *   **HADOOP_CDH**
     *   **CLICKHOUSE**
     *
     * This parameter is required.
     * @example ODPS
     *
     * @var string
     */
    public $calcEngineType;

    /**
     * @description The environment in which the compute engine is used. Valid values:
     *
     *   **DEV**
     *   **PRD**
     *
     * @example PRD
     *
     * @var string
     */
    public $envType;

    /**
     * @description The name of the compute engine, which must be exactly matched.
     *
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the DataWorks workspace with which the compute engine is associated.
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
