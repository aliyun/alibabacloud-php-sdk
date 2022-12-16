<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateUdfFileRequest extends Model
{
    /**
     * @example com.alibaba.DataWorks.api.udf.StringConcat
     *
     * @var string
     */
    public $className;

    /**
     * @example StringConcat(String... substrs)
     *
     * @var string
     */
    public $cmdDescription;

    /**
     * @example StringConcat(\"a\", \"b\", \"c\")
     *
     * @var string
     */
    public $example;

    /**
     * @var string
     */
    public $fileFolderPath;

    /**
     * @example 10000001
     *
     * @var string
     */
    public $fileId;

    /**
     * @example STRING
     *
     * @var string
     */
    public $functionType;

    /**
     * @var string
     */
    public $parameterDescription;

    /**
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @example dw_project
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @example string-concat-1.0.0.jar,commons-lang-2.6.jar
     *
     * @var string
     */
    public $resources;

    /**
     * @var string
     */
    public $returnValue;

    /**
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
