<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class SearchObjectShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $deviceListShrink;

    /**
     * @var string
     */
    public $picUrl;

    /**
     * @var string
     */
    public $conditionsShrink;

    /**
     * @var string
     */
    public $algorithmType;

    /**
     * @var string
     */
    public $imagePathShrink;
    protected $_name = [
        'corpId'           => 'CorpId',
        'objectType'       => 'ObjectType',
        'startTime'        => 'StartTime',
        'endTime'          => 'EndTime',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'deviceListShrink' => 'DeviceList',
        'picUrl'           => 'PicUrl',
        'conditionsShrink' => 'Conditions',
        'algorithmType'    => 'AlgorithmType',
        'imagePathShrink'  => 'ImagePath',
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
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->deviceListShrink) {
            $res['DeviceList'] = $this->deviceListShrink;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->conditionsShrink) {
            $res['Conditions'] = $this->conditionsShrink;
        }
        if (null !== $this->algorithmType) {
            $res['AlgorithmType'] = $this->algorithmType;
        }
        if (null !== $this->imagePathShrink) {
            $res['ImagePath'] = $this->imagePathShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchObjectShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['DeviceList'])) {
            $model->deviceListShrink = $map['DeviceList'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['Conditions'])) {
            $model->conditionsShrink = $map['Conditions'];
        }
        if (isset($map['AlgorithmType'])) {
            $model->algorithmType = $map['AlgorithmType'];
        }
        if (isset($map['ImagePath'])) {
            $model->imagePathShrink = $map['ImagePath'];
        }

        return $model;
    }
}
