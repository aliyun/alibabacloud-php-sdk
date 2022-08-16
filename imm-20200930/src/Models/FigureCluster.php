<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class FigureCluster extends Model
{
    /**
     * @var float
     */
    public $averageAge;

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
     * @var int
     */
    public $faceCount;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var int
     */
    public $imageCount;

    /**
     * @var float
     */
    public $maxAge;

    /**
     * @var float
     */
    public $minAge;

    /**
     * @var string
     */
    public $name;

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
    public $updateTime;

    /**
     * @var int
     */
    public $videoCount;
    protected $_name = [
        'averageAge'   => 'AverageAge',
        'cover'        => 'Cover',
        'createTime'   => 'CreateTime',
        'customId'     => 'CustomId',
        'customLabels' => 'CustomLabels',
        'datasetName'  => 'DatasetName',
        'faceCount'    => 'FaceCount',
        'gender'       => 'Gender',
        'imageCount'   => 'ImageCount',
        'maxAge'       => 'MaxAge',
        'minAge'       => 'MinAge',
        'name'         => 'Name',
        'objectId'     => 'ObjectId',
        'objectType'   => 'ObjectType',
        'ownerId'      => 'OwnerId',
        'projectName'  => 'ProjectName',
        'updateTime'   => 'UpdateTime',
        'videoCount'   => 'VideoCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->averageAge) {
            $res['AverageAge'] = $this->averageAge;
        }
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
        if (null !== $this->faceCount) {
            $res['FaceCount'] = $this->faceCount;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->imageCount) {
            $res['ImageCount'] = $this->imageCount;
        }
        if (null !== $this->maxAge) {
            $res['MaxAge'] = $this->maxAge;
        }
        if (null !== $this->minAge) {
            $res['MinAge'] = $this->minAge;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->videoCount) {
            $res['VideoCount'] = $this->videoCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FigureCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AverageAge'])) {
            $model->averageAge = $map['AverageAge'];
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
            $model->customLabels = $map['CustomLabels'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['FaceCount'])) {
            $model->faceCount = $map['FaceCount'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['ImageCount'])) {
            $model->imageCount = $map['ImageCount'];
        }
        if (isset($map['MaxAge'])) {
            $model->maxAge = $map['MaxAge'];
        }
        if (isset($map['MinAge'])) {
            $model->minAge = $map['MinAge'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VideoCount'])) {
            $model->videoCount = $map['VideoCount'];
        }

        return $model;
    }
}
