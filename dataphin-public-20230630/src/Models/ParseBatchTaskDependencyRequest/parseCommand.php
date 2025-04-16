<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ParseBatchTaskDependencyRequest;

use AlibabaCloud\Dara\Model;

class parseCommand extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $dataSourceCatalog;

    /**
     * @var int
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceSchema;

    /**
     * @var bool
     */
    public $includeAllInputTables;

    /**
     * @var bool
     */
    public $needQueryLineages;

    /**
     * @var string
     */
    public $operatorType;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'code' => 'Code',
        'dataSourceCatalog' => 'DataSourceCatalog',
        'dataSourceId' => 'DataSourceId',
        'dataSourceSchema' => 'DataSourceSchema',
        'includeAllInputTables' => 'IncludeAllInputTables',
        'needQueryLineages' => 'NeedQueryLineages',
        'operatorType' => 'OperatorType',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->includeAllInputTables) {
            $res['IncludeAllInputTables'] = $this->includeAllInputTables;
        }

        if (null !== $this->needQueryLineages) {
            $res['NeedQueryLineages'] = $this->needQueryLineages;
        }

        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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

        if (isset($map['IncludeAllInputTables'])) {
            $model->includeAllInputTables = $map['IncludeAllInputTables'];
        }

        if (isset($map['NeedQueryLineages'])) {
            $model->needQueryLineages = $map['NeedQueryLineages'];
        }

        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
