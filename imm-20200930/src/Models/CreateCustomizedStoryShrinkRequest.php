<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomizedStoryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $coverShrink;

    /**
     * @var string
     */
    public $customLabelsShrink;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $filesShrink;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $storyName;

    /**
     * @var string
     */
    public $storySubType;

    /**
     * @var string
     */
    public $storyType;
    protected $_name = [
        'coverShrink'        => 'Cover',
        'customLabelsShrink' => 'CustomLabels',
        'datasetName'        => 'DatasetName',
        'filesShrink'        => 'Files',
        'projectName'        => 'ProjectName',
        'storyName'          => 'StoryName',
        'storySubType'       => 'StorySubType',
        'storyType'          => 'StoryType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverShrink) {
            $res['Cover'] = $this->coverShrink;
        }
        if (null !== $this->customLabelsShrink) {
            $res['CustomLabels'] = $this->customLabelsShrink;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->filesShrink) {
            $res['Files'] = $this->filesShrink;
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
     * @return CreateCustomizedStoryShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cover'])) {
            $model->coverShrink = $map['Cover'];
        }
        if (isset($map['CustomLabels'])) {
            $model->customLabelsShrink = $map['CustomLabels'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['Files'])) {
            $model->filesShrink = $map['Files'];
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
