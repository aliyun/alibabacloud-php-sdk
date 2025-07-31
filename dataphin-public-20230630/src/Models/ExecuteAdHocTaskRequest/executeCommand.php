<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteAdHocTaskRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteAdHocTaskRequest\executeCommand\paramList;
use AlibabaCloud\Tea\Model;

class executeCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example show tables;
     *
     * @var string
     */
    public $code;

    /**
     * @example mysql_catalog
     *
     * @var string
     */
    public $dataSourceCatalog;

    /**
     * @example 12131111
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @example erp
     *
     * @var string
     */
    public $dataSourceSchema;

    /**
     * @description This parameter is required.
     *
     * @example MaxCompute_SQL
     *
     * @var string
     */
    public $operatorType;

    /**
     * @var paramList[]
     */
    public $paramList;

    /**
     * @description This parameter is required.
     *
     * @example 123222121
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'code' => 'Code',
        'dataSourceCatalog' => 'DataSourceCatalog',
        'dataSourceId' => 'DataSourceId',
        'dataSourceSchema' => 'DataSourceSchema',
        'operatorType' => 'OperatorType',
        'paramList' => 'ParamList',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->dataSourceCatalog) {
            $res['DataSourceCatalog'] = $this->dataSourceCatalog;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->dataSourceSchema) {
            $res['DataSourceSchema'] = $this->dataSourceSchema;
        }
        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }
        if (null !== $this->paramList) {
            $res['ParamList'] = [];
            if (null !== $this->paramList && \is_array($this->paramList)) {
                $n = 0;
                foreach ($this->paramList as $item) {
                    $res['ParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executeCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DataSourceCatalog'])) {
            $model->dataSourceCatalog = $map['DataSourceCatalog'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DataSourceSchema'])) {
            $model->dataSourceSchema = $map['DataSourceSchema'];
        }
        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }
        if (isset($map['ParamList'])) {
            if (!empty($map['ParamList'])) {
                $model->paramList = [];
                $n = 0;
                foreach ($map['ParamList'] as $item) {
                    $model->paramList[$n++] = null !== $item ? paramList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
