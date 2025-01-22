<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListFunctionsResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListFunctionsResponseBody\pagingInfo\functions\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListFunctionsResponseBody\pagingInfo\functions\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListFunctionsResponseBody\pagingInfo\functions\script;

class functions extends Model
{
    /**
     * @var string
     */
    public $armResource;
    /**
     * @var string
     */
    public $className;
    /**
     * @var string
     */
    public $commandDescription;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var dataSource
     */
    public $dataSource;
    /**
     * @var string
     */
    public $databaseName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $embeddedCode;
    /**
     * @var string
     */
    public $embeddedCodeType;
    /**
     * @var string
     */
    public $embeddedResourceType;
    /**
     * @var string
     */
    public $exampleDescription;
    /**
     * @var string
     */
    public $fileResource;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $modifyTime;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var string
     */
    public $parameterDescription;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $returnValueDescription;
    /**
     * @var runtimeResource
     */
    public $runtimeResource;
    /**
     * @var script
     */
    public $script;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'armResource'            => 'ArmResource',
        'className'              => 'ClassName',
        'commandDescription'     => 'CommandDescription',
        'createTime'             => 'CreateTime',
        'dataSource'             => 'DataSource',
        'databaseName'           => 'DatabaseName',
        'description'            => 'Description',
        'embeddedCode'           => 'EmbeddedCode',
        'embeddedCodeType'       => 'EmbeddedCodeType',
        'embeddedResourceType'   => 'EmbeddedResourceType',
        'exampleDescription'     => 'ExampleDescription',
        'fileResource'           => 'FileResource',
        'id'                     => 'Id',
        'modifyTime'             => 'ModifyTime',
        'name'                   => 'Name',
        'owner'                  => 'Owner',
        'parameterDescription'   => 'ParameterDescription',
        'projectId'              => 'ProjectId',
        'returnValueDescription' => 'ReturnValueDescription',
        'runtimeResource'        => 'RuntimeResource',
        'script'                 => 'Script',
        'type'                   => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->dataSource) {
            $this->dataSource->validate();
        }
        if (null !== $this->runtimeResource) {
            $this->runtimeResource->validate();
        }
        if (null !== $this->script) {
            $this->script->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->armResource) {
            $res['ArmResource'] = $this->armResource;
        }

        if (null !== $this->className) {
            $res['ClassName'] = $this->className;
        }

        if (null !== $this->commandDescription) {
            $res['CommandDescription'] = $this->commandDescription;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toArray($noStream) : $this->dataSource;
        }

        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->embeddedCode) {
            $res['EmbeddedCode'] = $this->embeddedCode;
        }

        if (null !== $this->embeddedCodeType) {
            $res['EmbeddedCodeType'] = $this->embeddedCodeType;
        }

        if (null !== $this->embeddedResourceType) {
            $res['EmbeddedResourceType'] = $this->embeddedResourceType;
        }

        if (null !== $this->exampleDescription) {
            $res['ExampleDescription'] = $this->exampleDescription;
        }

        if (null !== $this->fileResource) {
            $res['FileResource'] = $this->fileResource;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->parameterDescription) {
            $res['ParameterDescription'] = $this->parameterDescription;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->returnValueDescription) {
            $res['ReturnValueDescription'] = $this->returnValueDescription;
        }

        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toArray($noStream) : $this->runtimeResource;
        }

        if (null !== $this->script) {
            $res['Script'] = null !== $this->script ? $this->script->toArray($noStream) : $this->script;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ArmResource'])) {
            $model->armResource = $map['ArmResource'];
        }

        if (isset($map['ClassName'])) {
            $model->className = $map['ClassName'];
        }

        if (isset($map['CommandDescription'])) {
            $model->commandDescription = $map['CommandDescription'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
        }

        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EmbeddedCode'])) {
            $model->embeddedCode = $map['EmbeddedCode'];
        }

        if (isset($map['EmbeddedCodeType'])) {
            $model->embeddedCodeType = $map['EmbeddedCodeType'];
        }

        if (isset($map['EmbeddedResourceType'])) {
            $model->embeddedResourceType = $map['EmbeddedResourceType'];
        }

        if (isset($map['ExampleDescription'])) {
            $model->exampleDescription = $map['ExampleDescription'];
        }

        if (isset($map['FileResource'])) {
            $model->fileResource = $map['FileResource'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['ParameterDescription'])) {
            $model->parameterDescription = $map['ParameterDescription'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ReturnValueDescription'])) {
            $model->returnValueDescription = $map['ReturnValueDescription'];
        }

        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = runtimeResource::fromMap($map['RuntimeResource']);
        }

        if (isset($map['Script'])) {
            $model->script = script::fromMap($map['Script']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
