<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListEventAlgorithmDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
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
    public $recordId;

    /**
     * @var string
     */
    public $extendValue;

    /**
     * @var string
     */
    public $faceCount;

    /**
     * @var string
     */
    public $rightBottomX;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $extraExtendValue;

    /**
     * @var string
     */
    public $targetPicUrlPath;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $pointY;

    /**
     * @var string
     */
    public $leftTopY;

    /**
     * @var string
     */
    public $pointX;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $eventValue;

    /**
     * @var string
     */
    public $shotTime;

    /**
     * @var string
     */
    public $leftTopX;

    /**
     * @var string
     */
    public $tagCode;

    /**
     * @var string
     */
    public $tagCodeReliability;

    /**
     * @var string
     */
    public $uuidCode;
    protected $_name = [
        'rightBottomY'       => 'RightBottomY',
        'dataSourceId'       => 'DataSourceId',
        'picUrlPath'         => 'PicUrlPath',
        'recordId'           => 'RecordId',
        'extendValue'        => 'ExtendValue',
        'faceCount'          => 'FaceCount',
        'rightBottomX'       => 'RightBottomX',
        'sourceId'           => 'SourceId',
        'extraExtendValue'   => 'ExtraExtendValue',
        'targetPicUrlPath'   => 'TargetPicUrlPath',
        'eventType'          => 'EventType',
        'pointY'             => 'PointY',
        'leftTopY'           => 'LeftTopY',
        'pointX'             => 'PointX',
        'corpId'             => 'CorpId',
        'eventValue'         => 'EventValue',
        'shotTime'           => 'ShotTime',
        'leftTopX'           => 'LeftTopX',
        'tagCode'            => 'TagCode',
        'tagCodeReliability' => 'TagCodeReliability',
        'uuidCode'           => 'UuidCode',
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
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->extendValue) {
            $res['ExtendValue'] = $this->extendValue;
        }
        if (null !== $this->faceCount) {
            $res['FaceCount'] = $this->faceCount;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->extraExtendValue) {
            $res['ExtraExtendValue'] = $this->extraExtendValue;
        }
        if (null !== $this->targetPicUrlPath) {
            $res['TargetPicUrlPath'] = $this->targetPicUrlPath;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->pointY) {
            $res['PointY'] = $this->pointY;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->pointX) {
            $res['PointX'] = $this->pointX;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->eventValue) {
            $res['EventValue'] = $this->eventValue;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
        }
        if (null !== $this->tagCodeReliability) {
            $res['TagCodeReliability'] = $this->tagCodeReliability;
        }
        if (null !== $this->uuidCode) {
            $res['UuidCode'] = $this->uuidCode;
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
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['PicUrlPath'])) {
            $model->picUrlPath = $map['PicUrlPath'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['ExtendValue'])) {
            $model->extendValue = $map['ExtendValue'];
        }
        if (isset($map['FaceCount'])) {
            $model->faceCount = $map['FaceCount'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['ExtraExtendValue'])) {
            $model->extraExtendValue = $map['ExtraExtendValue'];
        }
        if (isset($map['TargetPicUrlPath'])) {
            $model->targetPicUrlPath = $map['TargetPicUrlPath'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['PointY'])) {
            $model->pointY = $map['PointY'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['PointX'])) {
            $model->pointX = $map['PointX'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['EventValue'])) {
            $model->eventValue = $map['EventValue'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }
        if (isset($map['TagCodeReliability'])) {
            $model->tagCodeReliability = $map['TagCodeReliability'];
        }
        if (isset($map['UuidCode'])) {
            $model->uuidCode = $map['UuidCode'];
        }

        return $model;
    }
}
