<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class CreateDatasetFileMetasRequest extends Model
{
    /**
     * @var DatasetFileMetaContentCreate[]
     */
    public $datasetFileMetas;

    /**
     * @var string
     */
    public $datasetVersion;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetFileMetas' => 'DatasetFileMetas',
        'datasetVersion' => 'DatasetVersion',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->datasetFileMetas)) {
            Model::validateArray($this->datasetFileMetas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetFileMetas) {
            if (\is_array($this->datasetFileMetas)) {
                $res['DatasetFileMetas'] = [];
                $n1 = 0;
                foreach ($this->datasetFileMetas as $item1) {
                    $res['DatasetFileMetas'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DatasetFileMetas'])) {
            if (!empty($map['DatasetFileMetas'])) {
                $model->datasetFileMetas = [];
                $n1 = 0;
                foreach ($map['DatasetFileMetas'] as $item1) {
                    $model->datasetFileMetas[$n1++] = DatasetFileMetaContentCreate::fromMap($item1);
                }
            }
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
