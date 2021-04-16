<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListCorpMetricsStatisticShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $tagCode;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
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
    public $userGroupListShrink;

    /**
     * @var string
     */
    public $deviceGroupListShrink;

    /**
     * @var string
     */
    public $deviceIdListShrink;

    /**
     * @var string
     */
    public $qualitScore;
    protected $_name = [
        'corpId'                => 'CorpId',
        'tagCode'               => 'TagCode',
        'startTime'             => 'StartTime',
        'endTime'               => 'EndTime',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'userGroupListShrink'   => 'UserGroupList',
        'deviceGroupListShrink' => 'DeviceGroupList',
        'deviceIdListShrink'    => 'DeviceIdList',
        'qualitScore'           => 'QualitScore',
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
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
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
        if (null !== $this->userGroupListShrink) {
            $res['UserGroupList'] = $this->userGroupListShrink;
        }
        if (null !== $this->deviceGroupListShrink) {
            $res['DeviceGroupList'] = $this->deviceGroupListShrink;
        }
        if (null !== $this->deviceIdListShrink) {
            $res['DeviceIdList'] = $this->deviceIdListShrink;
        }
        if (null !== $this->qualitScore) {
            $res['QualitScore'] = $this->qualitScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCorpMetricsStatisticShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
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
        if (isset($map['UserGroupList'])) {
            $model->userGroupListShrink = $map['UserGroupList'];
        }
        if (isset($map['DeviceGroupList'])) {
            $model->deviceGroupListShrink = $map['DeviceGroupList'];
        }
        if (isset($map['DeviceIdList'])) {
            $model->deviceIdListShrink = $map['DeviceIdList'];
        }
        if (isset($map['QualitScore'])) {
            $model->qualitScore = $map['QualitScore'];
        }

        return $model;
    }
}
