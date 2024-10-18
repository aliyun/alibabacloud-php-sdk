<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourcesResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourcesResponseBody\pagingInfo\resources\dataSource;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourcesResponseBody\pagingInfo\resources\script;
use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description The time when the file resource was created. This value is a UNIX timestamp.
     *
     * @example 1724505917000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The information about the data source.
     *
     * @var dataSource
     */
    public $dataSource;

    /**
     * @description The ID of the file resource.
     *
     * @example 631478864897630XXXX
     *
     * @var string
     */
    public $id;

    /**
     * @description The times when the file resource was last modified. This value is a UNIX timestamp.
     *
     * @example 1724505917000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The name of the file resource.
     *
     * @example math.py
     *
     * @var string
     */
    public $name;

    /**
     * @description The owner of the file resource.
     *
     * @example 110755000425XXXX
     *
     * @var string
     */
    public $owner;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * @example 344247
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The script information.
     *
     * @var script
     */
    public $script;

    /**
     * @description The storage path of the source of the file resource. If the value of the SourecType parameter is local, this parameter is empty.
     *
     * @example XXX/unknown/ide/1/XXX/20240820200851_963a9da676de44ef8d06a6576a8c4d6a.py
     *
     * @var string
     */
    public $sourcePath;

    /**
     * @description The storage type of the source of the file resource.
     *
     * @example local
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The storage path of the destination of the file resource.
     *
     * @example XXX/unknown/ide/1/XXX/20240820200851_963a9da676de44ef8d06a6576a8c4d6a.py
     *
     * @var string
     */
    public $targetPath;

    /**
     * @description The storage type of the destination of the file resource.
     *
     * @example oss
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The type of the file resource.
     *
     * Valid values:
     *
     *   jar
     *   python
     *   file
     *   archive
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
