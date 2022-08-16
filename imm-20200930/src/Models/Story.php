<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Story extends Model
{
    /**
     * @var File
     */
    public $cover;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $customId;

    /**
     * @var mixed[]
     */
    public $customLabels;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string[]
     */
    public $figureClusterIds;

    /**
     * @var File[]
     */
    public $files;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $storyEndTime;

    /**
     * @var string
     */
    public $storyName;

    /**
     * @var string
     */
    public $storyStartTime;

    /**
     * @var string
     */
    public $storySubType;

    /**
     * @var string
     */
    public $storyType;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'cover'            => 'Cover',
        'createTime'       => 'CreateTime',
        'customId'         => 'CustomId',
        'customLabels'     => 'CustomLabels',
        'datasetName'      => 'DatasetName',
        'figureClusterIds' => 'FigureClusterIds',
        'files'            => 'Files',
        'objectId'         => 'ObjectId',
        'objectType'       => 'ObjectType',
        'ownerId'          => 'OwnerId',
        'projectName'      => 'ProjectName',
        'storyEndTime'     => 'StoryEndTime',
        'storyName'        => 'StoryName',
        'storyStartTime'   => 'StoryStartTime',
        'storySubType'     => 'StorySubType',
        'storyType'        => 'StoryType',
        'updateTime'       => 'UpdateTime',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->figureClusterIds) {
            $res['FigureClusterIds'] = $this->figureClusterIds;
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
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->storyEndTime) {
            $res['StoryEndTime'] = $this->storyEndTime;
        }
        if (null !== $this->storyName) {
            $res['StoryName'] = $this->storyName;
        }
        if (null !== $this->storyStartTime) {
            $res['StoryStartTime'] = $this->storyStartTime;
        }
        if (null !== $this->storySubType) {
            $res['StorySubType'] = $this->storySubType;
        }
        if (null !== $this->storyType) {
            $res['StoryType'] = $this->storyType;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Story
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cover'])) {
            $model->cover = File::fromMap($map['Cover']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['FigureClusterIds'])) {
            if (!empty($map['FigureClusterIds'])) {
                $model->figureClusterIds = $map['FigureClusterIds'];
            }
        }
        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = [];
                $n            = 0;
                foreach ($map['Files'] as $item) {
                    $model->files[$n++] = null !== $item ? File::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['StoryEndTime'])) {
            $model->storyEndTime = $map['StoryEndTime'];
        }
        if (isset($map['StoryName'])) {
            $model->storyName = $map['StoryName'];
        }
        if (isset($map['StoryStartTime'])) {
            $model->storyStartTime = $map['StoryStartTime'];
        }
        if (isset($map['StorySubType'])) {
            $model->storySubType = $map['StorySubType'];
        }
        if (isset($map['StoryType'])) {
            $model->storyType = $map['StoryType'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
