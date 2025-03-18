<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class DeleteDatasetDocumentRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $datasetId;

    /**
     * @example 数据集名称
     *
     * @var string
     */
    public $datasetName;

    /**
     * @example xxx
     *
     * @var string
     */
    public $docId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $docUuid;

    /**
     * @description This parameter is required.
     *
     * @example llm-xx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetId' => 'DatasetId',
        'datasetName' => 'DatasetName',
        'docId' => 'DocId',
        'docUuid' => 'DocUuid',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->docUuid) {
            $res['DocUuid'] = $this->docUuid;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDatasetDocumentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['DocUuid'])) {
            $model->docUuid = $map['DocUuid'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
