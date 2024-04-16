<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListModelsResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string[][]
     */
    public $attributes;

    /**
     * @var string[]
     */
    public $content;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $linkModelId;

    /**
     * @var string
     */
    public $linkModuleId;

    /**
     * @var bool
     */
    public $linked;

    /**
     * @var string
     */
    public $modelDigest;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelStatus;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string[]
     */
    public $props;

    /**
     * @var int
     */
    public $revision;

    /**
     * @var string
     */
    public $schemaVersion;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $visibility;
    protected $_name = [
        'appId'         => 'AppId',
        'attributes'    => 'Attributes',
        'content'       => 'Content',
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'id'            => 'Id',
        'linkModelId'   => 'LinkModelId',
        'linkModuleId'  => 'LinkModuleId',
        'linked'        => 'Linked',
        'modelDigest'   => 'ModelDigest',
        'modelId'       => 'ModelId',
        'modelName'     => 'ModelName',
        'modelStatus'   => 'ModelStatus',
        'modelType'     => 'ModelType',
        'modifiedTime'  => 'ModifiedTime',
        'moduleId'      => 'ModuleId',
        'props'         => 'Props',
        'revision'      => 'Revision',
        'schemaVersion' => 'SchemaVersion',
        'subType'       => 'SubType',
        'visibility'    => 'Visibility',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->linkModelId) {
            $res['LinkModelId'] = $this->linkModelId;
        }
        if (null !== $this->linkModuleId) {
            $res['LinkModuleId'] = $this->linkModuleId;
        }
        if (null !== $this->linked) {
            $res['Linked'] = $this->linked;
        }
        if (null !== $this->modelDigest) {
            $res['ModelDigest'] = $this->modelDigest;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->modelStatus) {
            $res['ModelStatus'] = $this->modelStatus;
        }
        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->props) {
            $res['Props'] = $this->props;
        }
        if (null !== $this->revision) {
            $res['Revision'] = $this->revision;
        }
        if (null !== $this->schemaVersion) {
            $res['SchemaVersion'] = $this->schemaVersion;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = $map['Attributes'];
            }
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LinkModelId'])) {
            $model->linkModelId = $map['LinkModelId'];
        }
        if (isset($map['LinkModuleId'])) {
            $model->linkModuleId = $map['LinkModuleId'];
        }
        if (isset($map['Linked'])) {
            $model->linked = $map['Linked'];
        }
        if (isset($map['ModelDigest'])) {
            $model->modelDigest = $map['ModelDigest'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['ModelStatus'])) {
            $model->modelStatus = $map['ModelStatus'];
        }
        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['Props'])) {
            $model->props = $map['Props'];
        }
        if (isset($map['Revision'])) {
            $model->revision = $map['Revision'];
        }
        if (isset($map['SchemaVersion'])) {
            $model->schemaVersion = $map['SchemaVersion'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
