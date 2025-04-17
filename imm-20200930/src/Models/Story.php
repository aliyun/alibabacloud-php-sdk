<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class Story extends Model
{
    /**
     * @var Address[]
     */
    public $addresses;

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
        'addresses' => 'Addresses',
        'cover' => 'Cover',
        'createTime' => 'CreateTime',
        'customId' => 'CustomId',
        'customLabels' => 'CustomLabels',
        'datasetName' => 'DatasetName',
        'figureClusterIds' => 'FigureClusterIds',
        'files' => 'Files',
        'objectId' => 'ObjectId',
        'objectType' => 'ObjectType',
        'ownerId' => 'OwnerId',
        'projectName' => 'ProjectName',
        'storyEndTime' => 'StoryEndTime',
        'storyName' => 'StoryName',
        'storyStartTime' => 'StoryStartTime',
        'storySubType' => 'StorySubType',
        'storyType' => 'StoryType',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->addresses)) {
            Model::validateArray($this->addresses);
        }
        if (null !== $this->cover) {
            $this->cover->validate();
        }
        if (\is_array($this->customLabels)) {
            Model::validateArray($this->customLabels);
        }
        if (\is_array($this->figureClusterIds)) {
            Model::validateArray($this->figureClusterIds);
        }
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addresses) {
            if (\is_array($this->addresses)) {
                $res['Addresses'] = [];
                $n1 = 0;
                foreach ($this->addresses as $item1) {
                    $res['Addresses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->cover) {
            $res['Cover'] = null !== $this->cover ? $this->cover->toArray($noStream) : $this->cover;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }

        if (null !== $this->customLabels) {
            if (\is_array($this->customLabels)) {
                $res['CustomLabels'] = [];
                foreach ($this->customLabels as $key1 => $value1) {
                    $res['CustomLabels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->figureClusterIds) {
            if (\is_array($this->figureClusterIds)) {
                $res['FigureClusterIds'] = [];
                $n1 = 0;
                foreach ($this->figureClusterIds as $item1) {
                    $res['FigureClusterIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->files) {
            if (\is_array($this->files)) {
                $res['Files'] = [];
                $n1 = 0;
                foreach ($this->files as $item1) {
                    $res['Files'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = [];
                $n1 = 0;
                foreach ($map['Addresses'] as $item1) {
                    $model->addresses[$n1++] = Address::fromMap($item1);
                }
            }
        }

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
            if (!empty($map['CustomLabels'])) {
                $model->customLabels = [];
                foreach ($map['CustomLabels'] as $key1 => $value1) {
                    $model->customLabels[$key1] = $value1;
                }
            }
        }

        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['FigureClusterIds'])) {
            if (!empty($map['FigureClusterIds'])) {
                $model->figureClusterIds = [];
                $n1 = 0;
                foreach ($map['FigureClusterIds'] as $item1) {
                    $model->figureClusterIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = [];
                $n1 = 0;
                foreach ($map['Files'] as $item1) {
                    $model->files[$n1++] = File::fromMap($item1);
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
