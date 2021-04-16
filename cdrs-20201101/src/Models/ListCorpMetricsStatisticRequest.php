<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListCorpMetricsStatisticRequest extends Model
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
     * @var mixed[]
     */
    public $userGroupList;

    /**
     * @var mixed[]
     */
    public $deviceGroupList;

    /**
     * @var mixed[]
     */
    public $deviceIdList;

    /**
     * @var string
     */
    public $qualitScore;
    protected $_name = [
        'corpId'          => 'CorpId',
        'tagCode'         => 'TagCode',
        'startTime'       => 'StartTime',
        'endTime'         => 'EndTime',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'userGroupList'   => 'UserGroupList',
        'deviceGroupList' => 'DeviceGroupList',
        'deviceIdList'    => 'DeviceIdList',
        'qualitScore'     => 'QualitScore',
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
        if (null !== $this->userGroupList) {
            $res['UserGroupList'] = $this->userGroupList;
        }
        if (null !== $this->deviceGroupList) {
            $res['DeviceGroupList'] = $this->deviceGroupList;
        }
        if (null !== $this->deviceIdList) {
            $res['DeviceIdList'] = $this->deviceIdList;
        }
        if (null !== $this->qualitScore) {
            $res['QualitScore'] = $this->qualitScore;
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
            $model->userGroupList = $map['UserGroupList'];
        }
        if (isset($map['DeviceGroupList'])) {
            $model->deviceGroupList = $map['DeviceGroupList'];
        }
        if (isset($map['DeviceIdList'])) {
            $model->deviceIdList = $map['DeviceIdList'];
        }
        if (isset($map['QualitScore'])) {
            $model->qualitScore = $map['QualitScore'];
        }

        return $model;
    }
}
