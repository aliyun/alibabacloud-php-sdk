<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models;

use AlibabaCloud\Tea\Model;

class DataItemsModelDataValue extends Model
{
    /**
     * @var string
     */
    public $id;

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
    public $subType;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var bool
     */
    public $linked;

    /**
     * @var string
     */
    public $linkModuleId;

    /**
     * @var string
     */
    public $linkModelId;

    /**
     * @var string
     */
    public $schemaVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $props;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var string
     */
    public $modelDigest;
    protected $_name = [
        'id'            => 'Id',
        'modelId'       => 'ModelId',
        'modelName'     => 'ModelName',
        'modelStatus'   => 'ModelStatus',
        'modelType'     => 'ModelType',
        'subType'       => 'SubType',
        'moduleId'      => 'ModuleId',
        'content'       => 'Content',
        'appId'         => 'AppId',
        'linked'        => 'Linked',
        'linkModuleId'  => 'LinkModuleId',
        'linkModelId'   => 'LinkModelId',
        'schemaVersion' => 'SchemaVersion',
        'description'   => 'Description',
        'props'         => 'Props',
        'visibility'    => 'Visibility',
        'modelDigest'   => 'ModelDigest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->linked) {
            $res['Linked'] = $this->linked;
        }
        if (null !== $this->linkModuleId) {
            $res['LinkModuleId'] = $this->linkModuleId;
        }
        if (null !== $this->linkModelId) {
            $res['LinkModelId'] = $this->linkModelId;
        }
        if (null !== $this->schemaVersion) {
            $res['SchemaVersion'] = $this->schemaVersion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->props) {
            $res['Props'] = $this->props;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->modelDigest) {
            $res['ModelDigest'] = $this->modelDigest;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataItemsModelDataValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Linked'])) {
            $model->linked = $map['Linked'];
        }
        if (isset($map['LinkModuleId'])) {
            $model->linkModuleId = $map['LinkModuleId'];
        }
        if (isset($map['LinkModelId'])) {
            $model->linkModelId = $map['LinkModelId'];
        }
        if (isset($map['SchemaVersion'])) {
            $model->schemaVersion = $map['SchemaVersion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Props'])) {
            $model->props = $map['Props'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['ModelDigest'])) {
            $model->modelDigest = $map['ModelDigest'];
        }

        return $model;
    }
}
