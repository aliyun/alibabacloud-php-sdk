<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20190430\Models;

use AlibabaCloud\Tea\Model;

class GetPictureSearchResultsRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmType;

    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var string
     */
    public $deviceList;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var string
     */
    public $pictureContents;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $topNum;

    /**
     * @var string
     */
    public $vcsId;
    protected $_name = [
        'algorithmType'   => 'AlgorithmType',
        'beginTime'       => 'BeginTime',
        'deviceList'      => 'DeviceList',
        'endTime'         => 'EndTime',
        'pageNum'         => 'PageNum',
        'pictureContents' => 'PictureContents',
        'regionId'        => 'RegionId',
        'topNum'          => 'TopNum',
        'vcsId'           => 'VcsId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmType) {
            $res['AlgorithmType'] = $this->algorithmType;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->deviceList) {
            $res['DeviceList'] = $this->deviceList;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pictureContents) {
            $res['PictureContents'] = $this->pictureContents;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->topNum) {
            $res['TopNum'] = $this->topNum;
        }
        if (null !== $this->vcsId) {
            $res['VcsId'] = $this->vcsId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPictureSearchResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmType'])) {
            $model->algorithmType = $map['AlgorithmType'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['DeviceList'])) {
            $model->deviceList = $map['DeviceList'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PictureContents'])) {
            $model->pictureContents = $map['PictureContents'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TopNum'])) {
            $model->topNum = $map['TopNum'];
        }
        if (isset($map['VcsId'])) {
            $model->vcsId = $map['VcsId'];
        }

        return $model;
    }
}
