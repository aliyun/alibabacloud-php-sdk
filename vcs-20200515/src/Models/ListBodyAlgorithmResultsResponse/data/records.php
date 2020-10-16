<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListBodyAlgorithmResultsResponse\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $capStyle;

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
    public $personId;

    /**
     * @var string
     */
    public $genderCode;

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
     * @var string
     */
    public $maxAge;

    /**
     * @var string
     */
    public $minAge;

    /**
     * @var string
     */
    public $picUrlPath;

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
    public $shotTime;

    /**
     * @var string
     */
    public $targetPicUrlPath;

    /**
     * @var string
     */
    public $coatLength;

    /**
     * @var string
     */
    public $coatStyle;

    /**
     * @var string
     */
    public $trousersLength;

    /**
     * @var string
     */
    public $trousersStyle;

    /**
     * @var string
     */
    public $coatColor;

    /**
     * @var string
     */
    public $trousersColor;

    /**
     * @var string
     */
    public $sourceId;
    protected $_name = [
        'capStyle'         => 'CapStyle',
        'corpId'           => 'CorpId',
        'dataSourceId'     => 'DataSourceId',
        'personId'         => 'PersonId',
        'genderCode'       => 'GenderCode',
        'hairStyle'        => 'HairStyle',
        'leftTopX'         => 'LeftTopX',
        'leftTopY'         => 'LeftTopY',
        'maxAge'           => 'MaxAge',
        'minAge'           => 'MinAge',
        'picUrlPath'       => 'PicUrlPath',
        'rightBottomX'     => 'RightBottomX',
        'rightBottomY'     => 'RightBottomY',
        'shotTime'         => 'ShotTime',
        'targetPicUrlPath' => 'TargetPicUrlPath',
        'coatLength'       => 'CoatLength',
        'coatStyle'        => 'CoatStyle',
        'trousersLength'   => 'TrousersLength',
        'trousersStyle'    => 'TrousersStyle',
        'coatColor'        => 'CoatColor',
        'trousersColor'    => 'TrousersColor',
        'sourceId'         => 'SourceId',
    ];

    public function validate()
    {
        Model::validateRequired('capStyle', $this->capStyle, true);
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('dataSourceId', $this->dataSourceId, true);
        Model::validateRequired('personId', $this->personId, true);
        Model::validateRequired('genderCode', $this->genderCode, true);
        Model::validateRequired('hairStyle', $this->hairStyle, true);
        Model::validateRequired('leftTopX', $this->leftTopX, true);
        Model::validateRequired('leftTopY', $this->leftTopY, true);
        Model::validateRequired('maxAge', $this->maxAge, true);
        Model::validateRequired('minAge', $this->minAge, true);
        Model::validateRequired('picUrlPath', $this->picUrlPath, true);
        Model::validateRequired('rightBottomX', $this->rightBottomX, true);
        Model::validateRequired('rightBottomY', $this->rightBottomY, true);
        Model::validateRequired('shotTime', $this->shotTime, true);
        Model::validateRequired('targetPicUrlPath', $this->targetPicUrlPath, true);
        Model::validateRequired('coatLength', $this->coatLength, true);
        Model::validateRequired('coatStyle', $this->coatStyle, true);
        Model::validateRequired('trousersLength', $this->trousersLength, true);
        Model::validateRequired('trousersStyle', $this->trousersStyle, true);
        Model::validateRequired('coatColor', $this->coatColor, true);
        Model::validateRequired('trousersColor', $this->trousersColor, true);
        Model::validateRequired('sourceId', $this->sourceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capStyle) {
            $res['CapStyle'] = $this->capStyle;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->genderCode) {
            $res['GenderCode'] = $this->genderCode;
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
        if (null !== $this->maxAge) {
            $res['MaxAge'] = $this->maxAge;
        }
        if (null !== $this->minAge) {
            $res['MinAge'] = $this->minAge;
        }
        if (null !== $this->picUrlPath) {
            $res['PicUrlPath'] = $this->picUrlPath;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->targetPicUrlPath) {
            $res['TargetPicUrlPath'] = $this->targetPicUrlPath;
        }
        if (null !== $this->coatLength) {
            $res['CoatLength'] = $this->coatLength;
        }
        if (null !== $this->coatStyle) {
            $res['CoatStyle'] = $this->coatStyle;
        }
        if (null !== $this->trousersLength) {
            $res['TrousersLength'] = $this->trousersLength;
        }
        if (null !== $this->trousersStyle) {
            $res['TrousersStyle'] = $this->trousersStyle;
        }
        if (null !== $this->coatColor) {
            $res['CoatColor'] = $this->coatColor;
        }
        if (null !== $this->trousersColor) {
            $res['TrousersColor'] = $this->trousersColor;
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
        if (isset($map['CapStyle'])) {
            $model->capStyle = $map['CapStyle'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['GenderCode'])) {
            $model->genderCode = $map['GenderCode'];
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
        if (isset($map['MaxAge'])) {
            $model->maxAge = $map['MaxAge'];
        }
        if (isset($map['MinAge'])) {
            $model->minAge = $map['MinAge'];
        }
        if (isset($map['PicUrlPath'])) {
            $model->picUrlPath = $map['PicUrlPath'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['TargetPicUrlPath'])) {
            $model->targetPicUrlPath = $map['TargetPicUrlPath'];
        }
        if (isset($map['CoatLength'])) {
            $model->coatLength = $map['CoatLength'];
        }
        if (isset($map['CoatStyle'])) {
            $model->coatStyle = $map['CoatStyle'];
        }
        if (isset($map['TrousersLength'])) {
            $model->trousersLength = $map['TrousersLength'];
        }
        if (isset($map['TrousersStyle'])) {
            $model->trousersStyle = $map['TrousersStyle'];
        }
        if (isset($map['CoatColor'])) {
            $model->coatColor = $map['CoatColor'];
        }
        if (isset($map['TrousersColor'])) {
            $model->trousersColor = $map['TrousersColor'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        return $model;
    }
}
