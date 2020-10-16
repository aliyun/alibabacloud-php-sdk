<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListEventAlgorithmResultsResponse\data;

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
    public $eventType;

    /**
     * @var string
     */
    public $faceCount;

    /**
     * @var string
     */
    public $picUrlPath;

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
    public $recordId;

    /**
     * @var string
     */
    public $extendValue;

    /**
     * @var string
     */
    public $extendValueTwo;

    /**
     * @var string
     */
    public $extendValueThree;
    protected $_name = [
        'capStyle'         => 'CapStyle',
        'corpId'           => 'CorpId',
        'dataSourceId'     => 'DataSourceId',
        'eventType'        => 'EventType',
        'faceCount'        => 'FaceCount',
        'picUrlPath'       => 'PicUrlPath',
        'shotTime'         => 'ShotTime',
        'targetPicUrlPath' => 'TargetPicUrlPath',
        'recordId'         => 'RecordId',
        'extendValue'      => 'ExtendValue',
        'extendValueTwo'   => 'ExtendValueTwo',
        'extendValueThree' => 'ExtendValueThree',
    ];

    public function validate()
    {
        Model::validateRequired('capStyle', $this->capStyle, true);
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('dataSourceId', $this->dataSourceId, true);
        Model::validateRequired('eventType', $this->eventType, true);
        Model::validateRequired('faceCount', $this->faceCount, true);
        Model::validateRequired('picUrlPath', $this->picUrlPath, true);
        Model::validateRequired('shotTime', $this->shotTime, true);
        Model::validateRequired('targetPicUrlPath', $this->targetPicUrlPath, true);
        Model::validateRequired('recordId', $this->recordId, true);
        Model::validateRequired('extendValue', $this->extendValue, true);
        Model::validateRequired('extendValueTwo', $this->extendValueTwo, true);
        Model::validateRequired('extendValueThree', $this->extendValueThree, true);
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
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->faceCount) {
            $res['FaceCount'] = $this->faceCount;
        }
        if (null !== $this->picUrlPath) {
            $res['PicUrlPath'] = $this->picUrlPath;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->targetPicUrlPath) {
            $res['TargetPicUrlPath'] = $this->targetPicUrlPath;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->extendValue) {
            $res['ExtendValue'] = $this->extendValue;
        }
        if (null !== $this->extendValueTwo) {
            $res['ExtendValueTwo'] = $this->extendValueTwo;
        }
        if (null !== $this->extendValueThree) {
            $res['ExtendValueThree'] = $this->extendValueThree;
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
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['FaceCount'])) {
            $model->faceCount = $map['FaceCount'];
        }
        if (isset($map['PicUrlPath'])) {
            $model->picUrlPath = $map['PicUrlPath'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['TargetPicUrlPath'])) {
            $model->targetPicUrlPath = $map['TargetPicUrlPath'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['ExtendValue'])) {
            $model->extendValue = $map['ExtendValue'];
        }
        if (isset($map['ExtendValueTwo'])) {
            $model->extendValueTwo = $map['ExtendValueTwo'];
        }
        if (isset($map['ExtendValueThree'])) {
            $model->extendValueThree = $map['ExtendValueThree'];
        }

        return $model;
    }
}
