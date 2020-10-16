<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListEventAlgorithmDetailsResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
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
    public $eventType;

    /**
     * @var string
     */
    public $eventValue;

    /**
     * @var string
     */
    public $extendValue;

    /**
     * @var string
     */
    public $extraExtendValue;

    /**
     * @var string
     */
    public $faceCount;

    /**
     * @var string
     */
    public $leftTopX;

    /**
     * @var string
     */
    public $leftTopY;

    /**
     * @var string
     */
    public $picUrlPath;

    /**
     * @var string
     */
    public $pointX;

    /**
     * @var string
     */
    public $pointY;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $rightBottomX;

    /**
     * @var string
     */
    public $rightBottomY;

    /**
     * @var string
     */
    public $shotTime;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $targetPicUrlPath;
    protected $_name = [
        'corpId'           => 'CorpId',
        'dataSourceId'     => 'DataSourceId',
        'eventType'        => 'EventType',
        'eventValue'       => 'EventValue',
        'extendValue'      => 'ExtendValue',
        'extraExtendValue' => 'ExtraExtendValue',
        'faceCount'        => 'FaceCount',
        'leftTopX'         => 'LeftTopX',
        'leftTopY'         => 'LeftTopY',
        'picUrlPath'       => 'PicUrlPath',
        'pointX'           => 'PointX',
        'pointY'           => 'PointY',
        'recordId'         => 'RecordId',
        'rightBottomX'     => 'RightBottomX',
        'rightBottomY'     => 'RightBottomY',
        'shotTime'         => 'ShotTime',
        'sourceId'         => 'SourceId',
        'targetPicUrlPath' => 'TargetPicUrlPath',
    ];

    public function validate()
    {
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('dataSourceId', $this->dataSourceId, true);
        Model::validateRequired('eventType', $this->eventType, true);
        Model::validateRequired('eventValue', $this->eventValue, true);
        Model::validateRequired('extendValue', $this->extendValue, true);
        Model::validateRequired('extraExtendValue', $this->extraExtendValue, true);
        Model::validateRequired('faceCount', $this->faceCount, true);
        Model::validateRequired('leftTopX', $this->leftTopX, true);
        Model::validateRequired('leftTopY', $this->leftTopY, true);
        Model::validateRequired('picUrlPath', $this->picUrlPath, true);
        Model::validateRequired('pointX', $this->pointX, true);
        Model::validateRequired('pointY', $this->pointY, true);
        Model::validateRequired('recordId', $this->recordId, true);
        Model::validateRequired('rightBottomX', $this->rightBottomX, true);
        Model::validateRequired('rightBottomY', $this->rightBottomY, true);
        Model::validateRequired('shotTime', $this->shotTime, true);
        Model::validateRequired('sourceId', $this->sourceId, true);
        Model::validateRequired('targetPicUrlPath', $this->targetPicUrlPath, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->eventValue) {
            $res['EventValue'] = $this->eventValue;
        }
        if (null !== $this->extendValue) {
            $res['ExtendValue'] = $this->extendValue;
        }
        if (null !== $this->extraExtendValue) {
            $res['ExtraExtendValue'] = $this->extraExtendValue;
        }
        if (null !== $this->faceCount) {
            $res['FaceCount'] = $this->faceCount;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->picUrlPath) {
            $res['PicUrlPath'] = $this->picUrlPath;
        }
        if (null !== $this->pointX) {
            $res['PointX'] = $this->pointX;
        }
        if (null !== $this->pointY) {
            $res['PointY'] = $this->pointY;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
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
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->targetPicUrlPath) {
            $res['TargetPicUrlPath'] = $this->targetPicUrlPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['EventValue'])) {
            $model->eventValue = $map['EventValue'];
        }
        if (isset($map['ExtendValue'])) {
            $model->extendValue = $map['ExtendValue'];
        }
        if (isset($map['ExtraExtendValue'])) {
            $model->extraExtendValue = $map['ExtraExtendValue'];
        }
        if (isset($map['FaceCount'])) {
            $model->faceCount = $map['FaceCount'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['PicUrlPath'])) {
            $model->picUrlPath = $map['PicUrlPath'];
        }
        if (isset($map['PointX'])) {
            $model->pointX = $map['PointX'];
        }
        if (isset($map['PointY'])) {
            $model->pointY = $map['PointY'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
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
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['TargetPicUrlPath'])) {
            $model->targetPicUrlPath = $map['TargetPicUrlPath'];
        }

        return $model;
    }
}
