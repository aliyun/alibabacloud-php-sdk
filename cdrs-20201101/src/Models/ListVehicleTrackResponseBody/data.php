<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListVehicleTrackResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2286049969284580096
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 77010000991327001639
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @example 27.12435451436
     *
     * @var string
     */
    public $latitude;

    /**
     * @example 340
     *
     * @var string
     */
    public $leftTopX;

    /**
     * @example 1023
     *
     * @var string
     */
    public $leftTopY;

    /**
     * @example 112.2437647347
     *
     * @var string
     */
    public $longitude;

    /**
     * @example 2021-01-25 11:38:54
     *
     * @var string
     */
    public $passTime;

    /**
     * @example vcs-pic-hd2vc/9f34_3301000099132700164443_0/20210122/184812_qjaw6y4MSy.jpg?region=huadong2-zy
     *
     * @var string
     */
    public $picUrlPath;

    /**
     * @var string
     */
    public $plateId;

    /**
     * @example 581
     *
     * @var string
     */
    public $rightBottomX;

    /**
     * @example 1241
     *
     * @var string
     */
    public $rightBottomY;

    /**
     * @example https://www.aliyunvcs.cn/vcs/image/vcs-pic-hd2vc/9f34_3301000099543201659_1/20210122/184812_PYjHiF3YkV.jpg?region=huadong2-zy
     *
     * @var string
     */
    public $sourceUrl;

    /**
     * @example vcs-pic-hd2vc/9f34_3301000099543201659_1/20210122/184812_PYjHiF3YkV.jpg?region=huadong2-zy
     *
     * @var string
     */
    public $targetPicUrlPath;

    /**
     * @example https://www.aliyunvcs.cn/vcs/image/vcs-pic-hd2vc/9f34_3301000099543201659_1/20210122/184812_PYjHiF3YkV.jpg?region=huadong2-zy
     *
     * @var string
     */
    public $targetUrl;
    protected $_name = [
        'corpId'           => 'CorpId',
        'dataSourceId'     => 'DataSourceId',
        'dataSourceName'   => 'DataSourceName',
        'latitude'         => 'Latitude',
        'leftTopX'         => 'LeftTopX',
        'leftTopY'         => 'LeftTopY',
        'longitude'        => 'Longitude',
        'passTime'         => 'PassTime',
        'picUrlPath'       => 'PicUrlPath',
        'plateId'          => 'PlateId',
        'rightBottomX'     => 'RightBottomX',
        'rightBottomY'     => 'RightBottomY',
        'sourceUrl'        => 'SourceUrl',
        'targetPicUrlPath' => 'TargetPicUrlPath',
        'targetUrl'        => 'TargetUrl',
    ];

    public function validate()
    {
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
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->passTime) {
            $res['PassTime'] = $this->passTime;
        }
        if (null !== $this->picUrlPath) {
            $res['PicUrlPath'] = $this->picUrlPath;
        }
        if (null !== $this->plateId) {
            $res['PlateId'] = $this->plateId;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
        }
        if (null !== $this->targetPicUrlPath) {
            $res['TargetPicUrlPath'] = $this->targetPicUrlPath;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
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
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['PassTime'])) {
            $model->passTime = $map['PassTime'];
        }
        if (isset($map['PicUrlPath'])) {
            $model->picUrlPath = $map['PicUrlPath'];
        }
        if (isset($map['PlateId'])) {
            $model->plateId = $map['PlateId'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }
        if (isset($map['TargetPicUrlPath'])) {
            $model->targetPicUrlPath = $map['TargetPicUrlPath'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }

        return $model;
    }
}
