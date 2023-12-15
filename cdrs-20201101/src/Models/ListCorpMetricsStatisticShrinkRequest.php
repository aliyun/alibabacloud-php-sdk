<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListCorpMetricsStatisticShrinkRequest extends Model
{
    /**
     * @example 2286049969284580096
     *
     * @var string
     */
    public $corpId;

    /**
     * @example ["111"]
     *
     * @var string
     */
    public $deviceGroupListShrink;

    /**
     * @example ["111"]
     *
     * @var string
     */
    public $deviceIdListShrink;

    /**
     * @example 2021-01-21 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $qualitScore;

    /**
     * @example 2021-01-20 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example tag_corp_person_visits_numbers
     *
     * @var string
     */
    public $tagCode;

    /**
     * @example ["1111"]
     *
     * @var string
     */
    public $userGroupListShrink;
    protected $_name = [
        'corpId'                => 'CorpId',
        'deviceGroupListShrink' => 'DeviceGroupList',
        'deviceIdListShrink'    => 'DeviceIdList',
        'endTime'               => 'EndTime',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'qualitScore'           => 'QualitScore',
        'startTime'             => 'StartTime',
        'tagCode'               => 'TagCode',
        'userGroupListShrink'   => 'UserGroupList',
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
        if (null !== $this->deviceGroupListShrink) {
            $res['DeviceGroupList'] = $this->deviceGroupListShrink;
        }
        if (null !== $this->deviceIdListShrink) {
            $res['DeviceIdList'] = $this->deviceIdListShrink;
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
        if (null !== $this->qualitScore) {
            $res['QualitScore'] = $this->qualitScore;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
        }
        if (null !== $this->userGroupListShrink) {
            $res['UserGroupList'] = $this->userGroupListShrink;
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
        if (isset($map['DeviceGroupList'])) {
            $model->deviceGroupListShrink = $map['DeviceGroupList'];
        }
        if (isset($map['DeviceIdList'])) {
            $model->deviceIdListShrink = $map['DeviceIdList'];
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
        if (isset($map['QualitScore'])) {
            $model->qualitScore = $map['QualitScore'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }
        if (isset($map['UserGroupList'])) {
            $model->userGroupListShrink = $map['UserGroupList'];
        }

        return $model;
    }
}
