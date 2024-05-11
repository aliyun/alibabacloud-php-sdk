<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\CreateCustomizedStoryRequest\cover;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateCustomizedStoryRequest\files;
use AlibabaCloud\Tea\Model;

class CreateCustomizedStoryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var cover
     */
    public $cover;

    /**
     * @example {"Bucket": "examplebucket"}
     *
     * @var mixed[]
     */
    public $customLabels;

    /**
     * @description This parameter is required.
     *
     * @example dataset001
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description This parameter is required.
     *
     * @var files[]
     */
    public $files;

    /**
     * @description This parameter is required.
     *
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description This parameter is required.
     *
     * @example name1
     *
     * @var string
     */
    public $storyName;

    /**
     * @description This parameter is required.
     *
     * @example Solo
     *
     * @var string
     */
    public $storySubType;

    /**
     * @description This parameter is required.
     *
     * @example PeopleMemory
     *
     * @var string
     */
    public $storyType;
    protected $_name = [
        'cover'        => 'Cover',
        'customLabels' => 'CustomLabels',
        'datasetName'  => 'DatasetName',
        'files'        => 'Files',
        'projectName'  => 'ProjectName',
        'storyName'    => 'StoryName',
        'storySubType' => 'StorySubType',
        'storyType'    => 'StoryType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cover) {
            $res['Cover'] = null !== $this->cover ? $this->cover->toMap() : null;
        }
        if (null !== $this->customLabels) {
            $res['CustomLabels'] = $this->customLabels;
        }
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
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->storyName) {
            $res['StoryName'] = $this->storyName;
        }
        if (null !== $this->storySubType) {
            $res['StorySubType'] = $this->storySubType;
        }
        if (null !== $this->storyType) {
            $res['StoryType'] = $this->storyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomizedStoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cover'])) {
            $model->cover = cover::fromMap($map['Cover']);
        }
        if (isset($map['CustomLabels'])) {
            $model->customLabels = $map['CustomLabels'];
        }
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
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['StoryName'])) {
            $model->storyName = $map['StoryName'];
        }
        if (isset($map['StorySubType'])) {
            $model->storySubType = $map['StorySubType'];
        }
        if (isset($map['StoryType'])) {
            $model->storyType = $map['StoryType'];
        }

        return $model;
    }
}
