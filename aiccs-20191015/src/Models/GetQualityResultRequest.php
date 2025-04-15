<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

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
        'channelType' => 'ChannelType',
        'groupIds' => 'GroupIds',
        'hitStatus' => 'HitStatus',
        'instanceId' => 'InstanceId',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'projectIds' => 'ProjectIds',
        'qualityRuleIds' => 'QualityRuleIds',
        'touchEndTime' => 'TouchEndTime',
        'touchStartTime' => 'TouchStartTime',
    ];

    public function validate()
    {
        if (\is_array($this->groupIds)) {
            Model::validateArray($this->groupIds);
        }
        if (\is_array($this->projectIds)) {
            Model::validateArray($this->projectIds);
        }
        if (\is_array($this->qualityRuleIds)) {
            Model::validateArray($this->qualityRuleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }

        if (null !== $this->groupIds) {
            if (\is_array($this->groupIds)) {
                $res['GroupIds'] = [];
                $n1 = 0;
                foreach ($this->groupIds as $item1) {
                    $res['GroupIds'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->projectIds)) {
                $res['ProjectIds'] = [];
                $n1 = 0;
                foreach ($this->projectIds as $item1) {
                    $res['ProjectIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->qualityRuleIds) {
            if (\is_array($this->qualityRuleIds)) {
                $res['QualityRuleIds'] = [];
                $n1 = 0;
                foreach ($this->qualityRuleIds as $item1) {
                    $res['QualityRuleIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->touchEndTime) {
            $res['TouchEndTime'] = $this->touchEndTime;
        }

        if (null !== $this->touchStartTime) {
            $res['TouchStartTime'] = $this->touchStartTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }

        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = [];
                $n1 = 0;
                foreach ($map['GroupIds'] as $item1) {
                    $model->groupIds[$n1++] = $item1;
                }
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
                $model->projectIds = [];
                $n1 = 0;
                foreach ($map['ProjectIds'] as $item1) {
                    $model->projectIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['QualityRuleIds'])) {
            if (!empty($map['QualityRuleIds'])) {
                $model->qualityRuleIds = [];
                $n1 = 0;
                foreach ($map['QualityRuleIds'] as $item1) {
                    $model->qualityRuleIds[$n1++] = $item1;
                }
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
