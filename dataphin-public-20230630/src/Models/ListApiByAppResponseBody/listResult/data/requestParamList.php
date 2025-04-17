<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListApiByAppResponseBody\listResult\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListApiByAppResponseBody\listResult\data\requestParamList\tableAndDsList;

class requestParamList extends Model
{
    /**
     * @var string
     */
    public $dateFormat;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $descriptionCode;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $initialValue;

    /**
     * @var string
     */
    public $mappingColumn;

    /**
     * @var int
     */
    public $must;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var int
     */
    public $optional;

    /**
     * @var string
     */
    public $originalColumn;

    /**
     * @var string
     */
    public $paramName;

    /**
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $parameterLocation;

    /**
     * @var string
     */
    public $sample;

    /**
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

    public function validate()
    {
        if (\is_array($this->tableAndDsList)) {
            Model::validateArray($this->tableAndDsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tableAndDsList)) {
                $res['TableAndDsList'] = [];
                $n1 = 0;
                foreach ($this->tableAndDsList as $item1) {
                    $res['TableAndDsList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1 = 0;
                foreach ($map['TableAndDsList'] as $item1) {
                    $model->tableAndDsList[$n1++] = tableAndDsList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
