<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListCorpMetricsStatisticRequest extends Model
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
     * @var mixed[]
     */
    public $deviceGroupList;

    /**
     * @example ["111"]
     *
     * @var mixed[]
     */
    public $deviceIdList;

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
     * @var mixed[]
     */
    public $userGroupList;
    protected $_name = [
        'corpId'          => 'CorpId',
        'deviceGroupList' => 'DeviceGroupList',
        'deviceIdList'    => 'DeviceIdList',
        'endTime'         => 'EndTime',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'qualitScore'     => 'QualitScore',
        'startTime'       => 'StartTime',
        'tagCode'         => 'TagCode',
        'userGroupList'   => 'UserGroupList',
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
        if (null !== $this->deviceGroupList) {
            $res['DeviceGroupList'] = $this->deviceGroupList;
        }
        if (null !== $this->deviceIdList) {
            $res['DeviceIdList'] = $this->deviceIdList;
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
        if (null !== $this->userGroupList) {
            $res['UserGroupList'] = $this->userGroupList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCorpMetricsStatisticRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['DeviceGroupList'])) {
            $model->deviceGroupList = $map['DeviceGroupList'];
        }
        if (isset($map['DeviceIdList'])) {
            $model->deviceIdList = $map['DeviceIdList'];
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
            $model->userGroupList = $map['UserGroupList'];
        }

        return $model;
    }
}
