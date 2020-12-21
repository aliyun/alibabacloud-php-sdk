<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListEventAlgorithmResultsResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $extendValueTwo;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $picUrlPath;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $extendValue;

    /**
     * @var string
     */
    public $extendValueThree;

    /**
     * @var string
     */
    public $faceCount;

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
    public $corpId;

    /**
     * @var string
     */
    public $shotTime;

    /**
     * @var string
     */
    public $capStyle;

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
        'extendValueTwo'     => 'ExtendValueTwo',
        'recordId'           => 'RecordId',
        'picUrlPath'         => 'PicUrlPath',
        'dataSourceId'       => 'DataSourceId',
        'extendValue'        => 'ExtendValue',
        'extendValueThree'   => 'ExtendValueThree',
        'faceCount'          => 'FaceCount',
        'targetPicUrlPath'   => 'TargetPicUrlPath',
        'eventType'          => 'EventType',
        'corpId'             => 'CorpId',
        'shotTime'           => 'ShotTime',
        'capStyle'           => 'CapStyle',
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
        if (null !== $this->extendValueTwo) {
            $res['ExtendValueTwo'] = $this->extendValueTwo;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->picUrlPath) {
            $res['PicUrlPath'] = $this->picUrlPath;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->extendValue) {
            $res['ExtendValue'] = $this->extendValue;
        }
        if (null !== $this->extendValueThree) {
            $res['ExtendValueThree'] = $this->extendValueThree;
        }
        if (null !== $this->faceCount) {
            $res['FaceCount'] = $this->faceCount;
        }
        if (null !== $this->targetPicUrlPath) {
            $res['TargetPicUrlPath'] = $this->targetPicUrlPath;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->capStyle) {
            $res['CapStyle'] = $this->capStyle;
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
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtendValueTwo'])) {
            $model->extendValueTwo = $map['ExtendValueTwo'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['PicUrlPath'])) {
            $model->picUrlPath = $map['PicUrlPath'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['ExtendValue'])) {
            $model->extendValue = $map['ExtendValue'];
        }
        if (isset($map['ExtendValueThree'])) {
            $model->extendValueThree = $map['ExtendValueThree'];
        }
        if (isset($map['FaceCount'])) {
            $model->faceCount = $map['FaceCount'];
        }
        if (isset($map['TargetPicUrlPath'])) {
            $model->targetPicUrlPath = $map['TargetPicUrlPath'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['CapStyle'])) {
            $model->capStyle = $map['CapStyle'];
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
