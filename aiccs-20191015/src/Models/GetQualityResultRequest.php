<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetQualityResultRequest extends Model
{
    /**
     * @var string
     */
    public $channelType;

    /**
     * @var int[]
     */
    public $groupIds;

    /**
     * @var int
     */
    public $hitStatus;

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
     * @var int[]
     */
    public $projectIds;

    /**
     * @var int[]
     */
    public $qualityRuleIds;

    /**
     * @var string
     */
    public $touchEndTime;

    /**
     * @var string
     */
    public $touchStartTime;
    protected $_name = [
        'channelType'    => 'ChannelType',
        'groupIds'       => 'GroupIds',
        'hitStatus'      => 'HitStatus',
        'instanceId'     => 'InstanceId',
        'pageNo'         => 'PageNo',
        'pageSize'       => 'PageSize',
        'projectIds'     => 'ProjectIds',
        'qualityRuleIds' => 'QualityRuleIds',
        'touchEndTime'   => 'TouchEndTime',
        'touchStartTime' => 'TouchStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->groupIds) {
            $res['GroupIds'] = $this->groupIds;
        }
        if (null !== $this->hitStatus) {
            $res['HitStatus'] = $this->hitStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectIds) {
            $res['ProjectIds'] = $this->projectIds;
        }
        if (null !== $this->qualityRuleIds) {
            $res['QualityRuleIds'] = $this->qualityRuleIds;
        }
        if (null !== $this->touchEndTime) {
            $res['TouchEndTime'] = $this->touchEndTime;
        }
        if (null !== $this->touchStartTime) {
            $res['TouchStartTime'] = $this->touchStartTime;
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
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = $map['GroupIds'];
            }
        }
        if (isset($map['HitStatus'])) {
            $model->hitStatus = $map['HitStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectIds'])) {
            if (!empty($map['ProjectIds'])) {
                $model->projectIds = $map['ProjectIds'];
            }
        }
        if (isset($map['QualityRuleIds'])) {
            if (!empty($map['QualityRuleIds'])) {
                $model->qualityRuleIds = $map['QualityRuleIds'];
            }
        }
        if (isset($map['TouchEndTime'])) {
            $model->touchEndTime = $map['TouchEndTime'];
        }
        if (isset($map['TouchStartTime'])) {
            $model->touchStartTime = $map['TouchStartTime'];
        }

        return $model;
    }
}
