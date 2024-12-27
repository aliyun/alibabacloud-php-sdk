<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\RemoveStoryFilesRequest\files;
use AlibabaCloud\Tea\Model;

class RemoveStoryFilesRequest extends Model
{
    /**
     * @description The name of the dataset.
     *
     * This parameter is required.
     * @example testdataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description The files that you want to delete.
     *
     * This parameter is required.
     * @var files[]
     */
    public $files;

    /**
     * @description The ID of the story.
     *
     * This parameter is required.
     * @example testid
     *
     * @var string
     */
    public $objectId;

    /**
     * @description The name of the project.
     *
     * This parameter is required.
     * @example immtest
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'files'       => 'Files',
        'objectId'    => 'ObjectId',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->files) {
            $res['Files'] = [];
            if (null !== $this->files && \is_array($this->files)) {
                $n = 0;
                foreach ($this->files as $item) {
                    $res['Files'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveStoryFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = [];
                $n            = 0;
                foreach ($map['Files'] as $item) {
                    $model->files[$n++] = null !== $item ? files::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
