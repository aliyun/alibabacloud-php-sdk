<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListPersonTrackResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $sourceUrl;

    /**
     * @var string
     */
    public $rightBottomY;

    /**
     * @var string
     */
    public $dataSourceName;

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
    public $rightBottomX;

    /**
     * @var string
     */
    public $targetPicUrlPath;

    /**
     * @var string
     */
    public $leftTopY;

    /**
     * @var string
     */
    public $targetUrl;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $shotTime;

    /**
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $leftTopX;

    /**
     * @var string
     */
    public $tagGender;

    /**
     * @var string
     */
    public $tagAge;
    protected $_name = [
        'sourceUrl'        => 'SourceUrl',
        'rightBottomY'     => 'RightBottomY',
        'dataSourceName'   => 'DataSourceName',
        'picUrlPath'       => 'PicUrlPath',
        'dataSourceId'     => 'DataSourceId',
        'rightBottomX'     => 'RightBottomX',
        'targetPicUrlPath' => 'TargetPicUrlPath',
        'leftTopY'         => 'LeftTopY',
        'targetUrl'        => 'TargetUrl',
        'corpId'           => 'CorpId',
        'longitude'        => 'Longitude',
        'latitude'         => 'Latitude',
        'shotTime'         => 'ShotTime',
        'personId'         => 'PersonId',
        'leftTopX'         => 'LeftTopX',
        'tagGender'        => 'TagGender',
        'tagAge'           => 'TagAge',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->picUrlPath) {
            $res['PicUrlPath'] = $this->picUrlPath;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->targetPicUrlPath) {
            $res['TargetPicUrlPath'] = $this->targetPicUrlPath;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->shotTime) {
            $res['ShotTime'] = $this->shotTime;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->tagGender) {
            $res['TagGender'] = $this->tagGender;
        }
        if (null !== $this->tagAge) {
            $res['TagAge'] = $this->tagAge;
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
        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['PicUrlPath'])) {
            $model->picUrlPath = $map['PicUrlPath'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['TargetPicUrlPath'])) {
            $model->targetPicUrlPath = $map['TargetPicUrlPath'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['ShotTime'])) {
            $model->shotTime = $map['ShotTime'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['TagGender'])) {
            $model->tagGender = $map['TagGender'];
        }
        if (isset($map['TagAge'])) {
            $model->tagAge = $map['TagAge'];
        }

        return $model;
    }
}
