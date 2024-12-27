<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RemoveStoryFilesShrinkRequest extends Model
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
     * @var string
     */
    public $filesShrink;

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
        'filesShrink' => 'Files',
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
        if (null !== $this->filesShrink) {
            $res['Files'] = $this->filesShrink;
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
     * @return RemoveStoryFilesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['Files'])) {
            $model->filesShrink = $map['Files'];
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
