<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateUdfFileRequest extends Model
{
    /**
     * @description The name of the class in which the function is defined. This parameter corresponds to the Class Name parameter in the Register Function section of the configuration tab of the function in the DataWorks console.
     *
     * This parameter is required.
     * @example com.alibaba.DataWorks.api.udf.StringConcat
     *
     * @var string
     */
    public $className;

    /**
     * @description The syntax used for calling the function. This parameter corresponds to the Expression Syntax parameter in the Register Function section of the configuration tab of the function in the DataWorks console.
     *
     * @example StringConcat(String... substrs)
     *
     * @var string
     */
    public $cmdDescription;

    /**
     * @description The example for calling the function. This parameter corresponds to the Example parameter in the Register Function section of the configuration tab of the function in the DataWorks console.
     *
     * @example StringConcat(\\"a\\", \\"b\\", \\"c\\")
     *
     * @var string
     */
    public $example;

    /**
     * @description The path of the folder in which the function file is stored.
     *
     * @var string
     */
    public $fileFolderPath;

    /**
     * @description The ID of the file.
     *
     * This parameter is required.
     * @example 10000001
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The type of the function. Valid values: MATH, AGGREGATE, STRING, DATE, ANALYTIC, and OTHER. This parameter corresponds to the Function Type parameter in the Register Function section of the configuration tab of the function in the DataWorks console.
     *
     * This parameter is required.
     * @example STRING
     *
     * @var string
     */
    public $functionType;

    /**
     * @description The description of the input parameters of the function. This parameter corresponds to the Parameter Description parameter in the Register Function section of the configuration tab of the function in the DataWorks console.
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @description The ID of the DataWorks workspace. You can click the Workspace Manage icon in the upper-right corner of the DataStudio page to go to the Workspace Management page and view the workspace ID.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The unique identifier of the DataWorks workspace. You can click the identifier in the upper-left corner of the DataStudio page to switch to another workspace.
     *
     * You must specify either this parameter or ProjectId to determine the DataWorks workspace to which the operation is applied.
     * @example dw_project
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @description The names of the resources that are referenced by the function. This parameter corresponds to the Resources parameter in the Register Function section of the configuration tab of the function in the DataWorks console. Separate multiple resource names with commas (,).
     *
     * This parameter is required.
     * @example string-concat-1.0.0.jar,commons-lang-2.6.jar
     *
     * @var string
     */
    public $resources;

    /**
     * @description The description of the return value of the function. This parameter corresponds to the Return Value parameter in the Register Function section of the configuration tab of the function in the DataWorks console.
     *
     * @var string
     */
    public $returnValue;

    /**
     * @description The description of the function. This parameter corresponds to the Description parameter in the Register Function section of the configuration tab of the function in the DataWorks console.
     *
     * @var string
     */
    public $udfDescription;
    protected $_name = [
        'className'            => 'ClassName',
        'cmdDescription'       => 'CmdDescription',
        'example'              => 'Example',
        'fileFolderPath'       => 'FileFolderPath',
        'fileId'               => 'FileId',
        'functionType'         => 'FunctionType',
        'parameterDescription' => 'ParameterDescription',
        'projectId'            => 'ProjectId',
        'projectIdentifier'    => 'ProjectIdentifier',
        'resources'            => 'Resources',
        'returnValue'          => 'ReturnValue',
        'udfDescription'       => 'UdfDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->className) {
            $res['ClassName'] = $this->className;
        }
        if (null !== $this->cmdDescription) {
            $res['CmdDescription'] = $this->cmdDescription;
        }
        if (null !== $this->example) {
            $res['Example'] = $this->example;
        }
        if (null !== $this->fileFolderPath) {
            $res['FileFolderPath'] = $this->fileFolderPath;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
        }
        if (null !== $this->parameterDescription) {
            $res['ParameterDescription'] = $this->parameterDescription;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }
        if (null !== $this->returnValue) {
            $res['ReturnValue'] = $this->returnValue;
        }
        if (null !== $this->udfDescription) {
            $res['UdfDescription'] = $this->udfDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUdfFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassName'])) {
            $model->className = $map['ClassName'];
        }
        if (isset($map['CmdDescription'])) {
            $model->cmdDescription = $map['CmdDescription'];
        }
        if (isset($map['Example'])) {
            $model->example = $map['Example'];
        }
        if (isset($map['FileFolderPath'])) {
            $model->fileFolderPath = $map['FileFolderPath'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
        }
        if (isset($map['ParameterDescription'])) {
            $model->parameterDescription = $map['ParameterDescription'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }
        if (isset($map['ReturnValue'])) {
            $model->returnValue = $map['ReturnValue'];
        }
        if (isset($map['UdfDescription'])) {
            $model->udfDescription = $map['UdfDescription'];
        }

        return $model;
    }
}
