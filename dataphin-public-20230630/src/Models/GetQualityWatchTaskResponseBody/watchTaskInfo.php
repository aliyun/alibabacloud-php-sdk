<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetQualityWatchTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetQualityWatchTaskResponseBody\watchTaskInfo\ruleCountInfo;

class watchTaskInfo extends Model
{
    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var string
     */
    public $bizDateFormat;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $qualityOwner;

    /**
     * @var string
     */
    public $qualityOwnerName;

    /**
     * @var ruleCountInfo
     */
    public $ruleCountInfo;

    /**
     * @var int[]
     */
    public $ruleIdList;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $watchId;
    protected $_name = [
        'bizDate' => 'BizDate',
        'bizDateFormat' => 'BizDateFormat',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'endTime' => 'EndTime',
        'id' => 'Id',
        'modifier' => 'Modifier',
        'modifyTime' => 'ModifyTime',
        'qualityOwner' => 'QualityOwner',
        'qualityOwnerName' => 'QualityOwnerName',
        'ruleCountInfo' => 'RuleCountInfo',
        'ruleIdList' => 'RuleIdList',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'watchId' => 'WatchId',
    ];

    public function validate()
    {
        if (null !== $this->ruleCountInfo) {
            $this->ruleCountInfo->validate();
        }
        if (\is_array($this->ruleIdList)) {
            Model::validateArray($this->ruleIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }

        if (null !== $this->bizDateFormat) {
            $res['BizDateFormat'] = $this->bizDateFormat;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->qualityOwner) {
            $res['QualityOwner'] = $this->qualityOwner;
        }

        if (null !== $this->qualityOwnerName) {
            $res['QualityOwnerName'] = $this->qualityOwnerName;
        }

        if (null !== $this->ruleCountInfo) {
            $res['RuleCountInfo'] = null !== $this->ruleCountInfo ? $this->ruleCountInfo->toArray($noStream) : $this->ruleCountInfo;
        }

        if (null !== $this->ruleIdList) {
            if (\is_array($this->ruleIdList)) {
                $res['RuleIdList'] = [];
                $n1 = 0;
                foreach ($this->ruleIdList as $item1) {
                    $res['RuleIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->watchId) {
            $res['WatchId'] = $this->watchId;
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
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }

        if (isset($map['BizDateFormat'])) {
            $model->bizDateFormat = $map['BizDateFormat'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['QualityOwner'])) {
            $model->qualityOwner = $map['QualityOwner'];
        }

        if (isset($map['QualityOwnerName'])) {
            $model->qualityOwnerName = $map['QualityOwnerName'];
        }

        if (isset($map['RuleCountInfo'])) {
            $model->ruleCountInfo = ruleCountInfo::fromMap($map['RuleCountInfo']);
        }

        if (isset($map['RuleIdList'])) {
            if (!empty($map['RuleIdList'])) {
                $model->ruleIdList = [];
                $n1 = 0;
                foreach ($map['RuleIdList'] as $item1) {
                    $model->ruleIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WatchId'])) {
            $model->watchId = $map['WatchId'];
        }

        return $model;
    }
}
