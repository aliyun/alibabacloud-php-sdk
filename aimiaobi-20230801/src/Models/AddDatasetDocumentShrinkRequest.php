<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class AddDatasetDocumentShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $datasetId;
    /**
     * @var string
     */
    public $datasetName;
    /**
     * @var string
     */
    public $documentShrink;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetId'      => 'DatasetId',
        'datasetName'    => 'DatasetName',
        'documentShrink' => 'Document',
        'workspaceId'    => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->documentShrink) {
            $res['Document'] = $this->documentShrink;
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
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['Document'])) {
            $model->documentShrink = $map['Document'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
