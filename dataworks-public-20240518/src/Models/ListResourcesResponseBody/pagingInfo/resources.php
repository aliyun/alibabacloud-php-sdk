<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourcesResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourcesResponseBody\pagingInfo\resources\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourcesResponseBody\pagingInfo\resources\script;
use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @example 1724505917000
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
     * @description 代表资源组的资源属性字段
     *
     * @example 631478864897630XXXX
     *
     * @var string
     */
    public $id;

    /**
     * @description 资源文件的最近修改时间
     *
     * @example 1724505917000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description 代表资源名称的资源属性字段
     *
     * @example math.py
     *
     * @var string
     */
    public $name;

    /**
     * @description 资源文件的责任人
     *
     * @example 110755000425XXXX
     *
     * @var string
     */
    public $owner;

    /**
     * @description 资源文件的项目id
     *
     * @example 344247
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 工作流的脚本信息
     *
     * @var script
     */
    public $script;

    /**
     * @description 文件目标存储路径
     *
     * @example XXX/unknown/ide/1/XXX/20240820200851_963a9da676de44ef8d06a6576a8c4d6a.py
     *
     * @var string
     */
    public $sourcePath;

    /**
     * @description 文件资源来源存储类型
     *
     * @example local
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description 文件来源路径
     *
     * @example XXX/unknown/ide/1/XXX/20240820200851_963a9da676de44ef8d06a6576a8c4d6a.py
     *
     * @var string
     */
    public $targetPath;

    /**
     * @description 文件目标存储类型
     *
     * @example oss
     *
     * @var string
     */
    public $targetType;

    /**
     * @description 资源类型
     *
     * @example jar
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dataSource' => 'DataSource',
        'id'         => 'Id',
        'modifyTime' => 'ModifyTime',
        'name'       => 'Name',
        'owner'      => 'Owner',
        'projectId'  => 'ProjectId',
        'script'     => 'Script',
        'sourcePath' => 'SourcePath',
        'sourceType' => 'SourceType',
        'targetPath' => 'TargetPath',
        'targetType' => 'TargetType',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toMap() : null;
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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->script) {
            $res['Script'] = null !== $this->script ? $this->script->toMap() : null;
        }
        if (null !== $this->sourcePath) {
            $res['SourcePath'] = $this->sourcePath;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->targetPath) {
            $res['TargetPath'] = $this->targetPath;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Script'])) {
            $model->script = script::fromMap($map['Script']);
        }
        if (isset($map['SourcePath'])) {
            $model->sourcePath = $map['SourcePath'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['TargetPath'])) {
            $model->targetPath = $map['TargetPath'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
