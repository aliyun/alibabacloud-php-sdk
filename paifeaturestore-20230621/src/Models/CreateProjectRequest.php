<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;

class CreateProjectRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $offlineDatasourceId;

    /**
     * @var int
     */
    public $offlineLifeCycle;

    /**
     * @var string
     */
    public $onlineDatasourceId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'description' => 'Description',
        'name' => 'Name',
        'offlineDatasourceId' => 'OfflineDatasourceId',
        'offlineLifeCycle' => 'OfflineLifeCycle',
        'onlineDatasourceId' => 'OnlineDatasourceId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->offlineDatasourceId) {
            $res['OfflineDatasourceId'] = $this->offlineDatasourceId;
        }

        if (null !== $this->offlineLifeCycle) {
            $res['OfflineLifeCycle'] = $this->offlineLifeCycle;
        }

        if (null !== $this->onlineDatasourceId) {
            $res['OnlineDatasourceId'] = $this->onlineDatasourceId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OfflineDatasourceId'])) {
            $model->offlineDatasourceId = $map['OfflineDatasourceId'];
        }

        if (isset($map['OfflineLifeCycle'])) {
            $model->offlineLifeCycle = $map['OfflineLifeCycle'];
        }

        if (isset($map['OnlineDatasourceId'])) {
            $model->onlineDatasourceId = $map['OnlineDatasourceId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
