<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetQualityResultRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $touchStartTime;

    /**
     * @var string
     */
    public $touchEndTime;

    /**
     * @var string
     */
    public $channelType;

    /**
     * @var int
     */
    public $hitStatus;

    /**
     * @var int[]
     */
    public $groupIds;

    /**
     * @var int[]
     */
    public $qualityRuleIds;

    /**
     * @var int[]
     */
    public $projectIds;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'pageNo'         => 'PageNo',
        'pageSize'       => 'PageSize',
        'touchStartTime' => 'TouchStartTime',
        'touchEndTime'   => 'TouchEndTime',
        'channelType'    => 'ChannelType',
        'hitStatus'      => 'HitStatus',
        'groupIds'       => 'GroupIds',
        'qualityRuleIds' => 'QualityRuleIds',
        'projectIds'     => 'ProjectIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->touchStartTime) {
            $res['TouchStartTime'] = $this->touchStartTime;
        }
        if (null !== $this->touchEndTime) {
            $res['TouchEndTime'] = $this->touchEndTime;
        }
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->hitStatus) {
            $res['HitStatus'] = $this->hitStatus;
        }
        if (null !== $this->groupIds) {
            $res['GroupIds'] = $this->groupIds;
        }
        if (null !== $this->qualityRuleIds) {
            $res['QualityRuleIds'] = $this->qualityRuleIds;
        }
        if (null !== $this->projectIds) {
            $res['ProjectIds'] = $this->projectIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQualityResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TouchStartTime'])) {
            $model->touchStartTime = $map['TouchStartTime'];
        }
        if (isset($map['TouchEndTime'])) {
            $model->touchEndTime = $map['TouchEndTime'];
        }
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['HitStatus'])) {
            $model->hitStatus = $map['HitStatus'];
        }
        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = $map['GroupIds'];
            }
        }
        if (isset($map['QualityRuleIds'])) {
            if (!empty($map['QualityRuleIds'])) {
                $model->qualityRuleIds = $map['QualityRuleIds'];
            }
        }
        if (isset($map['ProjectIds'])) {
            if (!empty($map['ProjectIds'])) {
                $model->projectIds = $map['ProjectIds'];
            }
        }

        return $model;
    }
}
