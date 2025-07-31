<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListApiByAppResponseBody\listResult\data;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListApiByAppResponseBody\listResult\data\responseParamList\tableAndDsList;
use AlibabaCloud\Tea\Model;

class responseParamList extends Model
{
    /**
     * @example yyyy-MM-dd
     *
     * @var string
     */
    public $dateFormat;

    /**
     * @example default_response_value
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @example 这是一个示例响应参数
     *
     * @var string
     */
    public $description;

    /**
     * @example CODE_002
     *
     * @var string
     */
    public $descriptionCode;

    /**
     * @example 2001
     *
     * @var int
     */
    public $id;

    /**
     * @example app_key_value
     *
     * @var string
     */
    public $initialValue;

    /**
     * @example responseColumn1
     *
     * @var string
     */
    public $mappingColumn;

    /**
     * @example 1
     *
     * @var int
     */
    public $must;

    /**
     * @example =
     *
     * @var string
     */
    public $operator;

    /**
     * @example 1
     *
     * @var int
     */
    public $optional;

    /**
     * @example original_response_column
     *
     * @var string
     */
    public $originalColumn;

    /**
     * @example responseParam1
     *
     * @var string
     */
    public $paramName;

    /**
     * @example String
     *
     * @var string
     */
    public $paramType;

    /**
     * @example /path/to/response_param
     *
     * @var string
     */
    public $parameterLocation;

    /**
     * @example responseValue1
     *
     * @var string
     */
    public $sample;

    /**
     * @description -
     *
     * @var tableAndDsList[]
     */
    public $tableAndDsList;
    protected $_name = [
        'dateFormat' => 'DateFormat',
        'defaultValue' => 'DefaultValue',
        'description' => 'Description',
        'descriptionCode' => 'DescriptionCode',
        'id' => 'Id',
        'initialValue' => 'InitialValue',
        'mappingColumn' => 'MappingColumn',
        'must' => 'Must',
        'operator' => 'Operator',
        'optional' => 'Optional',
        'originalColumn' => 'OriginalColumn',
        'paramName' => 'ParamName',
        'paramType' => 'ParamType',
        'parameterLocation' => 'ParameterLocation',
        'sample' => 'Sample',
        'tableAndDsList' => 'TableAndDsList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateFormat) {
            $res['DateFormat'] = $this->dateFormat;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->descriptionCode) {
            $res['DescriptionCode'] = $this->descriptionCode;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->initialValue) {
            $res['InitialValue'] = $this->initialValue;
        }
        if (null !== $this->mappingColumn) {
            $res['MappingColumn'] = $this->mappingColumn;
        }
        if (null !== $this->must) {
            $res['Must'] = $this->must;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->optional) {
            $res['Optional'] = $this->optional;
        }
        if (null !== $this->originalColumn) {
            $res['OriginalColumn'] = $this->originalColumn;
        }
        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
        }
        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }
        if (null !== $this->parameterLocation) {
            $res['ParameterLocation'] = $this->parameterLocation;
        }
        if (null !== $this->sample) {
            $res['Sample'] = $this->sample;
        }
        if (null !== $this->tableAndDsList) {
            $res['TableAndDsList'] = [];
            if (null !== $this->tableAndDsList && \is_array($this->tableAndDsList)) {
                $n = 0;
                foreach ($this->tableAndDsList as $item) {
                    $res['TableAndDsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return responseParamList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DateFormat'])) {
            $model->dateFormat = $map['DateFormat'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DescriptionCode'])) {
            $model->descriptionCode = $map['DescriptionCode'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InitialValue'])) {
            $model->initialValue = $map['InitialValue'];
        }
        if (isset($map['MappingColumn'])) {
            $model->mappingColumn = $map['MappingColumn'];
        }
        if (isset($map['Must'])) {
            $model->must = $map['Must'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Optional'])) {
            $model->optional = $map['Optional'];
        }
        if (isset($map['OriginalColumn'])) {
            $model->originalColumn = $map['OriginalColumn'];
        }
        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }
        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }
        if (isset($map['ParameterLocation'])) {
            $model->parameterLocation = $map['ParameterLocation'];
        }
        if (isset($map['Sample'])) {
            $model->sample = $map['Sample'];
        }
        if (isset($map['TableAndDsList'])) {
            if (!empty($map['TableAndDsList'])) {
                $model->tableAndDsList = [];
                $n = 0;
                foreach ($map['TableAndDsList'] as $item) {
                    $model->tableAndDsList[$n++] = null !== $item ? tableAndDsList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
