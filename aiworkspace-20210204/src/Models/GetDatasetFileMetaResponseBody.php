<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class GetDatasetFileMetaResponseBody extends Model
{
    /**
     * @var DatasetFileMetaContentGet
     */
    public $datasetFileMeta;

    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $datasetVersion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetFileMeta' => 'DatasetFileMeta',
        'datasetId' => 'DatasetId',
        'datasetVersion' => 'DatasetVersion',
        'requestId' => 'RequestId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->datasetFileMeta) {
            $this->datasetFileMeta->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetFileMeta) {
            $res['DatasetFileMeta'] = null !== $this->datasetFileMeta ? $this->datasetFileMeta->toArray($noStream) : $this->datasetFileMeta;
        }

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->datasetVersion) {
            $res['DatasetVersion'] = $this->datasetVersion;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DatasetFileMeta'])) {
            $model->datasetFileMeta = DatasetFileMetaContentGet::fromMap($map['DatasetFileMeta']);
        }

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['DatasetVersion'])) {
            $model->datasetVersion = $map['DatasetVersion'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
