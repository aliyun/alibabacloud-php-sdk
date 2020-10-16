<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListFaceAlgorithmResultsResponse\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $faceId;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $shotTime;

    /**
     * @var string
     */
    public $genderCode;

    /**
     * @var string
     */
    public $minAge;

    /**
     * @var string
     */
    public $maxAge;

    /**
     * @var string
     */
    public $capStyle;

    /**
     * @var string
     */
    public $hairStyle;

    /**
     * @var float
     */
    public $leftTopX;

    /**
     * @var float
     */
    public $leftTopY;

    /**
     * @var float
     */
    public $rightBottomX;

    /**
     * @var float
     */
    public $rightBottomY;

    /**
     * @var string
     */
    public $picUrlPath;

    /**
     * @var string
     */
    public $targetPicUrlPath;

    /**
     * @var string
     */
    public $sourceId;
    protected $_name = [
        'faceId'           => 'FaceId',
        'corpId'           => 'CorpId',
        'dataSourceId'     => 'DataSourceId',
        'shotTime'         => 'ShotTime',
        'genderCode'       => 'GenderCode',
        'minAge'           => 'MinAge',
        'maxAge'           => 'MaxAge',
        'capStyle'         => 'CapStyle',
        'hairStyle'        => 'HairStyle',
        'leftTopX'         => 'LeftTopX',
        'leftTopY'         => 'LeftTopY',
        'rightBottomX'     => 'RightBottomX',
        'rightBottomY'     => 'RightBottomY',
        'picUrlPath'       => 'PicUrlPath',
        'targetPicUrlPath' => 'TargetPicUrlPath',
        'sourceId'         => 'SourceId',
    ];

    public function validate()
    {
        Model::validateRequired('faceId', $this->faceId, true);
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('dataSourceId', $this->dataSourceId, true);
        Model::validateRequired('shotTime', $this->shotTime, true);
        Model::validateRequired('genderCode', $this->genderCode, true);
        Model::validateRequired('minAge', $this->minAge, true);
        Model::validateRequired('maxAge', $this->maxAge, true);
        Model::validateRequired('capStyle', $this->capStyle, true);
        Model::validateRequired('hairStyle', $this->hairStyle, true);
        Model::validateRequired('leftTopX', $this->leftTopX, true);
        Model::validateRequired('leftTopY', $this->leftTopY, true);
        Model::validateRequired('rightBottomX', $this->rightBottomX, true);
        Model::validateRequired('rightBottomY', $this->rightBottomY, true);
        Model::validateRequired('picUrlPath', $this->picUrlPath, true);
        Model::validateRequired('targetPicUrlPath', $this->targetPicUrlPath, true);
        Model::validateRequired('sourceId', $this->sourceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->genderCode) {
            $res['GenderCode'] = $this->genderCode;
        }
        if (null !== $this->minAge) {
            $res['MinAge'] = $this->minAge;
        }
        if (null !== $this->maxAge) {
            $res['MaxAge'] = $this->maxAge;
        }
        if (null !== $this->capStyle) {
            $res['CapStyle'] = $this->capStyle;
        }
        if (null !== $this->hairStyle) {
            $res['HairStyle'] = $this->hairStyle;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->picUrlPath) {
            $res['PicUrlPath'] = $this->picUrlPath;
        }
        if (null !== $this->targetPicUrlPath) {
            $res['TargetPicUrlPath'] = $this->targetPicUrlPath;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['GenderCode'])) {
            $model->genderCode = $map['GenderCode'];
        }
        if (isset($map['MinAge'])) {
            $model->minAge = $map['MinAge'];
        }
        if (isset($map['MaxAge'])) {
            $model->maxAge = $map['MaxAge'];
        }
        if (isset($map['CapStyle'])) {
            $model->capStyle = $map['CapStyle'];
        }
        if (isset($map['HairStyle'])) {
            $model->hairStyle = $map['HairStyle'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['PicUrlPath'])) {
            $model->picUrlPath = $map['PicUrlPath'];
        }
        if (isset($map['TargetPicUrlPath'])) {
            $model->targetPicUrlPath = $map['TargetPicUrlPath'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        return $model;
    }
}
