<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class Model extends Model
{
    /**
     * @example PUBLIC
     *
     * @var string
     */
    public $accessibility;

    /**
     * @example cv
     *
     * @var string
     */
    public $domain;

    /**
     * @example 2021-01-21T17:12:35Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-21T17:12:35Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var Label[]
     */
    public $labels;

    /**
     * @var ModelVersion
     */
    public $latestVersion;

    /**
     * @var string
     */
    public $modelDescription;

    /**
     * @example https://***.md
     *
     * @var string
     */
    public $modelDoc;

    /**
     * @example model-1123*****
     *
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @example 101
     *
     * @var int
     */
    public $orderNumber;

    /**
     * @example ModelScope
     *
     * @var string
     */
    public $origin;

    /**
     * @example 1557702098******
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example pai
     *
     * @var string
     */
    public $provider;

    /**
     * @example 1557702098******
     *
     * @var string
     */
    public $sourceId;

    /**
     * @example AI4D
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example text-classifiaction
     *
     * @var string
     */
    public $task;

    /**
     * @example 1557702098******
     *
     * @var string
     */
    public $userId;

    /**
     * @example 234**
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility'    => 'Accessibility',
        'domain'           => 'Domain',
        'gmtCreateTime'    => 'GmtCreateTime',
        'gmtModifiedTime'  => 'GmtModifiedTime',
        'labels'           => 'Labels',
        'latestVersion'    => 'LatestVersion',
        'modelDescription' => 'ModelDescription',
        'modelDoc'         => 'ModelDoc',
        'modelId'          => 'ModelId',
        'modelName'        => 'ModelName',
        'orderNumber'      => 'OrderNumber',
        'origin'           => 'Origin',
        'ownerId'          => 'OwnerId',
        'provider'         => 'Provider',
        'sourceId'         => 'SourceId',
        'sourceType'       => 'SourceType',
        'task'             => 'Task',
        'userId'           => 'UserId',
        'workspaceId'      => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = null !== $this->latestVersion ? $this->latestVersion->toMap() : null;
        }
        if (null !== $this->modelDescription) {
            $res['ModelDescription'] = $this->modelDescription;
        }
        if (null !== $this->modelDoc) {
            $res['ModelDoc'] = $this->modelDoc;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->orderNumber) {
            $res['OrderNumber'] = $this->orderNumber;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->task) {
            $res['Task'] = $this->task;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Model
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? Label::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LatestVersion'])) {
            $model->latestVersion = ModelVersion::fromMap($map['LatestVersion']);
        }
        if (isset($map['ModelDescription'])) {
            $model->modelDescription = $map['ModelDescription'];
        }
        if (isset($map['ModelDoc'])) {
            $model->modelDoc = $map['ModelDoc'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['OrderNumber'])) {
            $model->orderNumber = $map['OrderNumber'];
        }
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Task'])) {
            $model->task = $map['Task'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
