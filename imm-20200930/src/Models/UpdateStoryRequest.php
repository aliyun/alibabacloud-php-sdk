<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateStoryRequest\cover;
use AlibabaCloud\Tea\Model;

class UpdateStoryRequest extends Model
{
    /**
     * @description The cover image of the story.
     *
     * @var cover
     */
    public $cover;

    /**
     * @description The custom ID.
     *
     * @example test
     *
     * @var string
     */
    public $customId;

    /**
     * @description The custom tags. You can specify up to 100 custom tags.
     *
     * @example {"key": "value"}
     *
     * @var mixed[]
     */
    public $customLabels;

    /**
     * @description The name of the dataset.
     *
     * This parameter is required.
     * @example testdata
     *
     * @var string
     */
    public $datasetName;

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

    /**
     * @description The name of the story.
     *
     * @example newstory
     *
     * @var string
     */
    public $storyName;
    protected $_name = [
        'cover'        => 'Cover',
        'customId'     => 'CustomId',
        'customLabels' => 'CustomLabels',
        'datasetName'  => 'DatasetName',
        'objectId'     => 'ObjectId',
        'projectName'  => 'ProjectName',
        'storyName'    => 'StoryName',
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
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }
        if (null !== $this->customLabels) {
            $res['CustomLabels'] = $this->customLabels;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->storyName) {
            $res['StoryName'] = $this->storyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cover'])) {
            $model->cover = cover::fromMap($map['Cover']);
        }
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }
        if (isset($map['CustomLabels'])) {
            $model->customLabels = $map['CustomLabels'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['StoryName'])) {
            $model->storyName = $map['StoryName'];
        }

        return $model;
    }
}
