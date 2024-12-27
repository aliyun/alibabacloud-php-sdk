<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomizedStoryShrinkRequest extends Model
{
    /**
     * @description The cover image of the story. You can specify an image as the cover image of the custom story.
     *
     * This parameter is required.
     * @var string
     */
    public $coverShrink;

    /**
     * @description The custom labels. You can specify labels to help you identify and retrieve the story.
     *
     * @example {"Bucket": "examplebucket"}
     *
     * @var string
     */
    public $customLabelsShrink;

    /**
     * @description The name of the dataset.[](~~478160~~)
     *
     * This parameter is required.
     * @example dataset001
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description The files of the story. You can specify up to 100 files in a custom story.
     *
     * This parameter is required.
     * @var string
     */
    public $filesShrink;

    /**
     * @description The name of the project.[](~~478153~~)
     *
     * This parameter is required.
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The name of the story.
     *
     * This parameter is required.
     * @example name1
     *
     * @var string
     */
    public $storyName;

    /**
     * @description The subtype of the story. For information about valid subtypes, see [Story types and subtypes](https://help.aliyun.com/document_detail/2743998.html).
     *
     * This parameter is required.
     * @example Solo
     *
     * @var string
     */
    public $storySubType;

    /**
     * @description The type of the story. For information about valid types, see [Story types and subtypes](https://help.aliyun.com/document_detail/2743998.html).
     *
     * This parameter is required.
     * @example PeopleMemory
     *
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
