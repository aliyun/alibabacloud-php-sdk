<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class ListCorpGroupMetricsRequest extends Model
{
    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $tagCode;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $userGroup;

    /**
     * @var string
     */
    public $deviceGroup;
    protected $_name = [
        'startTime'   => 'StartTime',
        'tagCode'     => 'TagCode',
        'endTime'     => 'EndTime',
        'groupId'     => 'GroupId',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'deviceId'    => 'DeviceId',
        'corpId'      => 'CorpId',
        'userGroup'   => 'UserGroup',
        'deviceGroup' => 'DeviceGroup',
    ];

    public function validate()
    {
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('tagCode', $this->tagCode, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->userGroup) {
            $res['UserGroup'] = $this->userGroup;
        }
        if (null !== $this->deviceGroup) {
            $res['DeviceGroup'] = $this->deviceGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCorpGroupMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['UserGroup'])) {
            $model->userGroup = $map['UserGroup'];
        }
        if (isset($map['DeviceGroup'])) {
            $model->deviceGroup = $map['DeviceGroup'];
        }

        return $model;
    }
}
