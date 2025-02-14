<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class UpdateDataLakeFunctionRequest extends Model
{
    /**
     * @var string
     */
    public $catalogName;
    /**
     * @var string
     */
    public $dataRegion;
    /**
     * @var string
     */
    public $dbName;
    /**
     * @var DLFunctionInput
     */
    public $functionInput;
    /**
     * @var string
     */
    public $functionName;
    /**
     * @var int
     */
    public $tid;
    /**
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'catalogName'   => 'CatalogName',
        'dataRegion'    => 'DataRegion',
        'dbName'        => 'DbName',
        'functionInput' => 'FunctionInput',
        'functionName'  => 'FunctionName',
        'tid'           => 'Tid',
        'workspaceId'   => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->functionInput) {
            $this->functionInput->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }

        if (null !== $this->dataRegion) {
            $res['DataRegion'] = $this->dataRegion;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->functionInput) {
            $res['FunctionInput'] = null !== $this->functionInput ? $this->functionInput->toArray($noStream) : $this->functionInput;
        }

        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }

        if (isset($map['DataRegion'])) {
            $model->dataRegion = $map['DataRegion'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['FunctionInput'])) {
            $model->functionInput = DLFunctionInput::fromMap($map['FunctionInput']);
        }

        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
