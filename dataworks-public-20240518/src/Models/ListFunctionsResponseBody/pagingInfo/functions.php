<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListFunctionsResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListFunctionsResponseBody\pagingInfo\functions\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListFunctionsResponseBody\pagingInfo\functions\runtimeResource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListFunctionsResponseBody\pagingInfo\functions\script;
use AlibabaCloud\Tea\Model;

class functions extends Model
{
    /**
     * @description ARM集群资源文件列表
     *
     * @example xxx.jar,yyy.jar
     *
     * @var string
     */
    public $armResource;

    /**
     * @description 函数实现类名
     *
     * @example com.demo.Main
     *
     * @var string
     */
    public $className;

    /**
     * @description 命令描述
     *
     * @example testUdf(xx,yy)
     *
     * @var string
     */
    public $commandDescription;

    /**
     * @description 代表创建时间的资源属性字段
     *
     * @example 1655953028000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 函数注册到的数据源信息
     *
     * @var dataSource
     */
    public $dataSource;

    /**
     * @description 数据库名，可选
     *
     * @example odps_first
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description 对funciotn的描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 嵌套函数代码内容
     *
     * @example print(\\"hello,world!\\")
     *
     * @var string
     */
    public $embeddedCode;

    /**
     * @description 嵌套代码类型
     *
     * @example Python2
     *
     * @var string
     */
    public $embeddedCodeType;

    /**
     * @description 嵌套资源类型
     *
     * @example File
     *
     * @var string
     */
    public $embeddedResourceType;

    /**
     * @description 示例说明
     *
     * @var string
     */
    public $exampleDescription;

    /**
     * @description 函数的实现代码
     *
     * @example xxx.jar,yyy.jar
     *
     * @var string
     */
    public $fileResource;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example 580667964888595XXXX
     *
     * @var string
     */
    public $id;

    /**
     * @description 修改时间
     *
     * @example 1655953028000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description 代表资源名称的资源属性字段
     *
     * @var string
     */
    public $name;

    /**
     * @description 函数责任人
     *
     * @example 110755000425XXXX
     *
     * @var string
     */
    public $owner;

    /**
     * @description 命令描述
     *
     * @var string
     */
    public $parameterDescription;

    /**
     * @description 项目Id
     *
     * @example 307XXX
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 返回值说明
     *
     * @var string
     */
    public $returnValueDescription;

    /**
     * @description 运行时资源组信息
     *
     * @var runtimeResource
     */
    public $runtimeResource;

    /**
     * @description 工作流的脚本信息
     *
     * @var script
     */
    public $script;

    /**
     * @description 函数类型
     *
     * @example MATH
     *
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
    }

    public function toMap()
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
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toMap() : null;
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
            $res['RuntimeResource'] = null !== $this->runtimeResource ? $this->runtimeResource->toMap() : null;
        }
        if (null !== $this->script) {
            $res['Script'] = null !== $this->script ? $this->script->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return functions
     */
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
