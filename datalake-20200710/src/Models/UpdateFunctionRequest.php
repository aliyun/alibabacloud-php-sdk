<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class UpdateFunctionRequest extends Model
{
    /**
     * @example 1344371
     *
     * @var string
     */
    public $catalogId;

    /**
     * @example database_test
     *
     * @var string
     */
    public $databaseName;

    /**
     * @var FunctionInput
     */
    public $functionInput;

    /**
     * @example func2
     *
     * @var string
     */
    public $functionName;
    protected $_name = [
        'catalogId'     => 'CatalogId',
        'databaseName'  => 'DatabaseName',
        'functionInput' => 'FunctionInput',
        'functionName'  => 'FunctionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->functionInput) {
            $res['FunctionInput'] = null !== $this->functionInput ? $this->functionInput->toMap() : null;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFunctionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['FunctionInput'])) {
            $model->functionInput = FunctionInput::fromMap($map['FunctionInput']);
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        return $model;
    }
}
