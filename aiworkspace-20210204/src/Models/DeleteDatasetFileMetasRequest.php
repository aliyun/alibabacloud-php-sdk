<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class DeleteDatasetFileMetasRequest extends Model
{
    /**
     * @var string
     */
    public $datasetFileMetaIds;
    /**
     * @var string
     */
    public $datasetVersion;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetFileMetaIds' => 'DatasetFileMetaIds',
        'datasetVersion'     => 'DatasetVersion',
        'workspaceId'        => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetFileMetaIds) {
            $res['DatasetFileMetaIds'] = $this->datasetFileMetaIds;
        }

        if (null !== $this->datasetVersion) {
            $res['DatasetVersion'] = $this->datasetVersion;
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
        if (isset($map['DatasetFileMetaIds'])) {
            $model->datasetFileMetaIds = $map['DatasetFileMetaIds'];
        }

        if (isset($map['DatasetVersion'])) {
            $model->datasetVersion = $map['DatasetVersion'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
