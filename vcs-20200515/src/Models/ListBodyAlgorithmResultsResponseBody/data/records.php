<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListBodyAlgorithmResultsResponseBody\data;

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
    public $trousersColor;

    /**
     * @var float
     */
    public $rightBottomX;

    /**
     * @var string
     */
    public $coatColor;

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
    public $coatLength;

    /**
     * @var string
     */
    public $targetPicUrlPath;

    /**
     * @var string
     */
    public $hairStyle;

    /**
     * @var string
     */
    public $coatStyle;

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
    public $trousersLength;

    /**
     * @var string
     */
    public $trousersStyle;

    /**
     * @var string
     */
    public $shotTime;

    /**
     * @var float
     */
    public $leftTopX;

    /**
     * @var string
     */
    public $genderCode;

    /**
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $capStyle;
    protected $_name = [
        'rightBottomY'     => 'RightBottomY',
        'dataSourceId'     => 'DataSourceId',
        'picUrlPath'       => 'PicUrlPath',
        'trousersColor'    => 'TrousersColor',
        'rightBottomX'     => 'RightBottomX',
        'coatColor'        => 'CoatColor',
        'sourceId'         => 'SourceId',
        'maxAge'           => 'MaxAge',
        'coatLength'       => 'CoatLength',
        'targetPicUrlPath' => 'TargetPicUrlPath',
        'hairStyle'        => 'HairStyle',
        'coatStyle'        => 'CoatStyle',
        'leftTopY'         => 'LeftTopY',
        'minAge'           => 'MinAge',
        'corpId'           => 'CorpId',
        'trousersLength'   => 'TrousersLength',
        'trousersStyle'    => 'TrousersStyle',
        'shotTime'         => 'ShotTime',
        'leftTopX'         => 'LeftTopX',
        'genderCode'       => 'GenderCode',
        'personId'         => 'PersonId',
        'capStyle'         => 'CapStyle',
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
        if (null !== $this->trousersColor) {
            $res['TrousersColor'] = $this->trousersColor;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->coatColor) {
            $res['CoatColor'] = $this->coatColor;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->maxAge) {
            $res['MaxAge'] = $this->maxAge;
        }
        if (null !== $this->coatLength) {
            $res['CoatLength'] = $this->coatLength;
        }
        if (null !== $this->targetPicUrlPath) {
            $res['TargetPicUrlPath'] = $this->targetPicUrlPath;
        }
        if (null !== $this->hairStyle) {
            $res['HairStyle'] = $this->hairStyle;
        }
        if (null !== $this->coatStyle) {
            $res['CoatStyle'] = $this->coatStyle;
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
        if (null !== $this->trousersLength) {
            $res['TrousersLength'] = $this->trousersLength;
        }
        if (null !== $this->trousersStyle) {
            $res['TrousersStyle'] = $this->trousersStyle;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->genderCode) {
            $res['GenderCode'] = $this->genderCode;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->capStyle) {
            $res['CapStyle'] = $this->capStyle;
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
        if (isset($map['TrousersColor'])) {
            $model->trousersColor = $map['TrousersColor'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['CoatColor'])) {
            $model->coatColor = $map['CoatColor'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['MaxAge'])) {
            $model->maxAge = $map['MaxAge'];
        }
        if (isset($map['CoatLength'])) {
            $model->coatLength = $map['CoatLength'];
        }
        if (isset($map['TargetPicUrlPath'])) {
            $model->targetPicUrlPath = $map['TargetPicUrlPath'];
        }
        if (isset($map['HairStyle'])) {
            $model->hairStyle = $map['HairStyle'];
        }
        if (isset($map['CoatStyle'])) {
            $model->coatStyle = $map['CoatStyle'];
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
        if (isset($map['TrousersLength'])) {
            $model->trousersLength = $map['TrousersLength'];
        }
        if (isset($map['TrousersStyle'])) {
            $model->trousersStyle = $map['TrousersStyle'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['GenderCode'])) {
            $model->genderCode = $map['GenderCode'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['CapStyle'])) {
            $model->capStyle = $map['CapStyle'];
        }

        return $model;
    }
}
