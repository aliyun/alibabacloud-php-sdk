<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonTraceDetailsResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $targetPicUrlPath;

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
    public $picUrlPath;

    /**
     * @var string
     */
    public $rightBottomY;

    /**
     * @var string
     */
    public $rightBottomX;

    /**
     * @var string
     */
    public $shotTime;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $subId;

    /**
     * @var string
     */
    public $leftTopY;

    /**
     * @var string
     */
    public $leftTopX;
    protected $_name = [
        'targetPicUrlPath' => 'TargetPicUrlPath',
        'dataSourceId'     => 'DataSourceId',
        'personId'         => 'PersonId',
        'picUrlPath'       => 'PicUrlPath',
        'rightBottomY'     => 'RightBottomY',
        'rightBottomX'     => 'RightBottomX',
        'shotTime'         => 'ShotTime',
        'corpId'           => 'CorpId',
        'subId'            => 'SubId',
        'leftTopY'         => 'LeftTopY',
        'leftTopX'         => 'LeftTopX',
    ];

    public function validate()
    {
        Model::validateRequired('targetPicUrlPath', $this->targetPicUrlPath, true);
        Model::validateRequired('dataSourceId', $this->dataSourceId, true);
        Model::validateRequired('personId', $this->personId, true);
        Model::validateRequired('picUrlPath', $this->picUrlPath, true);
        Model::validateRequired('rightBottomY', $this->rightBottomY, true);
        Model::validateRequired('rightBottomX', $this->rightBottomX, true);
        Model::validateRequired('shotTime', $this->shotTime, true);
        Model::validateRequired('corpId', $this->corpId, true);
        Model::validateRequired('subId', $this->subId, true);
        Model::validateRequired('leftTopY', $this->leftTopY, true);
        Model::validateRequired('leftTopX', $this->leftTopX, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetPicUrlPath) {
            $res['TargetPicUrlPath'] = $this->targetPicUrlPath;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->picUrlPath) {
            $res['PicUrlPath'] = $this->picUrlPath;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->subId) {
            $res['SubId'] = $this->subId;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
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
        if (isset($map['TargetPicUrlPath'])) {
            $model->targetPicUrlPath = $map['TargetPicUrlPath'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['PicUrlPath'])) {
            $model->picUrlPath = $map['PicUrlPath'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['SubId'])) {
            $model->subId = $map['SubId'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }

        return $model;
    }
}
