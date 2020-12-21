<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListFaceAlgorithmResultsResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var float
     */
    public $rightBottomY;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $picUrlPath;

    /**
     * @var string
     */
    public $faceId;

    /**
     * @var float
     */
    public $rightBottomX;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $maxAge;

    /**
     * @var string
     */
    public $targetPicUrlPath;

    /**
     * @var string
     */
    public $hairStyle;

    /**
     * @var float
     */
    public $leftTopY;

    /**
     * @var string
     */
    public $minAge;

    /**
     * @var string
     */
    public $corpId;

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
    public $capStyle;

    /**
     * @var float
     */
    public $leftTopX;
    protected $_name = [
        'rightBottomY'     => 'RightBottomY',
        'dataSourceId'     => 'DataSourceId',
        'picUrlPath'       => 'PicUrlPath',
        'faceId'           => 'FaceId',
        'rightBottomX'     => 'RightBottomX',
        'sourceId'         => 'SourceId',
        'maxAge'           => 'MaxAge',
        'targetPicUrlPath' => 'TargetPicUrlPath',
        'hairStyle'        => 'HairStyle',
        'leftTopY'         => 'LeftTopY',
        'minAge'           => 'MinAge',
        'corpId'           => 'CorpId',
        'shotTime'         => 'ShotTime',
        'genderCode'       => 'GenderCode',
        'capStyle'         => 'CapStyle',
        'leftTopX'         => 'LeftTopX',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->picUrlPath) {
            $res['PicUrlPath'] = $this->picUrlPath;
        }
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->maxAge) {
            $res['MaxAge'] = $this->maxAge;
        }
        if (null !== $this->targetPicUrlPath) {
            $res['TargetPicUrlPath'] = $this->targetPicUrlPath;
        }
        if (null !== $this->hairStyle) {
            $res['HairStyle'] = $this->hairStyle;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->minAge) {
            $res['MinAge'] = $this->minAge;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->genderCode) {
            $res['GenderCode'] = $this->genderCode;
        }
        if (null !== $this->capStyle) {
            $res['CapStyle'] = $this->capStyle;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
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
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['PicUrlPath'])) {
            $model->picUrlPath = $map['PicUrlPath'];
        }
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['MaxAge'])) {
            $model->maxAge = $map['MaxAge'];
        }
        if (isset($map['TargetPicUrlPath'])) {
            $model->targetPicUrlPath = $map['TargetPicUrlPath'];
        }
        if (isset($map['HairStyle'])) {
            $model->hairStyle = $map['HairStyle'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['MinAge'])) {
            $model->minAge = $map['MinAge'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['GenderCode'])) {
            $model->genderCode = $map['GenderCode'];
        }
        if (isset($map['CapStyle'])) {
            $model->capStyle = $map['CapStyle'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }

        return $model;
    }
}
