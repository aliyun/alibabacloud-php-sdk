<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data\callerList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data\customerIdList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data\customerNameList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data\customerServiceIdList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data\customerServiceNameList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data\reviewerList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data\skillGroupNameList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $assignStatus;

    /**
     * @example 2022-09-26 10:09:14
     *
     * @var string
     */
    public $callStartTime;

    /**
     * @var callerList
     */
    public $callerList;

    /**
     * @var customerIdList
     */
    public $customerIdList;

    /**
     * @var customerNameList
     */
    public $customerNameList;

    /**
     * @var customerServiceIdList
     */
    public $customerServiceIdList;

    /**
     * @var customerServiceNameList
     */
    public $customerServiceNameList;

    /**
     * @example 1
     *
     * @var int
     */
    public $hitSessionCount;

    /**
     * @example 4498420@a_z@93EAADF1-01D3-44BD-8AC9-F57F447EFCE8_1614*****
     *
     * @var string
     */
    public $lastDataId;

    /**
     * @example 1
     *
     * @var int
     */
    public $reviewStatus;

    /**
     * @var reviewerList
     */
    public $reviewerList;

    /**
     * @example 123
     *
     * @var int
     */
    public $schemeTaskConfigId;

    /**
     * @var string
     */
    public $schemeTaskConfigName;

    /**
     * @example 100
     *
     * @var int
     */
    public $score;

    /**
     * @example 1
     *
     * @var int
     */
    public $sessionCount;

    /**
     * @example SessionGroupA
     *
     * @var string
     */
    public $sessionGroupId;

    /**
     * @example true
     *
     * @var bool
     */
    public $sessionGroupReviewedOrComplained;

    /**
     * @var skillGroupNameList
     */
    public $skillGroupNameList;
    protected $_name = [
        'assignStatus'                     => 'AssignStatus',
        'callStartTime'                    => 'CallStartTime',
        'callerList'                       => 'CallerList',
        'customerIdList'                   => 'CustomerIdList',
        'customerNameList'                 => 'CustomerNameList',
        'customerServiceIdList'            => 'CustomerServiceIdList',
        'customerServiceNameList'          => 'CustomerServiceNameList',
        'hitSessionCount'                  => 'HitSessionCount',
        'lastDataId'                       => 'LastDataId',
        'reviewStatus'                     => 'ReviewStatus',
        'reviewerList'                     => 'ReviewerList',
        'schemeTaskConfigId'               => 'SchemeTaskConfigId',
        'schemeTaskConfigName'             => 'SchemeTaskConfigName',
        'score'                            => 'Score',
        'sessionCount'                     => 'SessionCount',
        'sessionGroupId'                   => 'SessionGroupId',
        'sessionGroupReviewedOrComplained' => 'SessionGroupReviewedOrComplained',
        'skillGroupNameList'               => 'SkillGroupNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignStatus) {
            $res['AssignStatus'] = $this->assignStatus;
        }
        if (null !== $this->callStartTime) {
            $res['CallStartTime'] = $this->callStartTime;
        }
        if (null !== $this->callerList) {
            $res['CallerList'] = null !== $this->callerList ? $this->callerList->toMap() : null;
        }
        if (null !== $this->customerIdList) {
            $res['CustomerIdList'] = null !== $this->customerIdList ? $this->customerIdList->toMap() : null;
        }
        if (null !== $this->customerNameList) {
            $res['CustomerNameList'] = null !== $this->customerNameList ? $this->customerNameList->toMap() : null;
        }
        if (null !== $this->customerServiceIdList) {
            $res['CustomerServiceIdList'] = null !== $this->customerServiceIdList ? $this->customerServiceIdList->toMap() : null;
        }
        if (null !== $this->customerServiceNameList) {
            $res['CustomerServiceNameList'] = null !== $this->customerServiceNameList ? $this->customerServiceNameList->toMap() : null;
        }
        if (null !== $this->hitSessionCount) {
            $res['HitSessionCount'] = $this->hitSessionCount;
        }
        if (null !== $this->lastDataId) {
            $res['LastDataId'] = $this->lastDataId;
        }
        if (null !== $this->reviewStatus) {
            $res['ReviewStatus'] = $this->reviewStatus;
        }
        if (null !== $this->reviewerList) {
            $res['ReviewerList'] = null !== $this->reviewerList ? $this->reviewerList->toMap() : null;
        }
        if (null !== $this->schemeTaskConfigId) {
            $res['SchemeTaskConfigId'] = $this->schemeTaskConfigId;
        }
        if (null !== $this->schemeTaskConfigName) {
            $res['SchemeTaskConfigName'] = $this->schemeTaskConfigName;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }
        if (null !== $this->sessionGroupId) {
            $res['SessionGroupId'] = $this->sessionGroupId;
        }
        if (null !== $this->sessionGroupReviewedOrComplained) {
            $res['SessionGroupReviewedOrComplained'] = $this->sessionGroupReviewedOrComplained;
        }
        if (null !== $this->skillGroupNameList) {
            $res['SkillGroupNameList'] = null !== $this->skillGroupNameList ? $this->skillGroupNameList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssignStatus'])) {
            $model->assignStatus = $map['AssignStatus'];
        }
        if (isset($map['CallStartTime'])) {
            $model->callStartTime = $map['CallStartTime'];
        }
        if (isset($map['CallerList'])) {
            $model->callerList = callerList::fromMap($map['CallerList']);
        }
        if (isset($map['CustomerIdList'])) {
            $model->customerIdList = customerIdList::fromMap($map['CustomerIdList']);
        }
        if (isset($map['CustomerNameList'])) {
            $model->customerNameList = customerNameList::fromMap($map['CustomerNameList']);
        }
        if (isset($map['CustomerServiceIdList'])) {
            $model->customerServiceIdList = customerServiceIdList::fromMap($map['CustomerServiceIdList']);
        }
        if (isset($map['CustomerServiceNameList'])) {
            $model->customerServiceNameList = customerServiceNameList::fromMap($map['CustomerServiceNameList']);
        }
        if (isset($map['HitSessionCount'])) {
            $model->hitSessionCount = $map['HitSessionCount'];
        }
        if (isset($map['LastDataId'])) {
            $model->lastDataId = $map['LastDataId'];
        }
        if (isset($map['ReviewStatus'])) {
            $model->reviewStatus = $map['ReviewStatus'];
        }
        if (isset($map['ReviewerList'])) {
            $model->reviewerList = reviewerList::fromMap($map['ReviewerList']);
        }
        if (isset($map['SchemeTaskConfigId'])) {
            $model->schemeTaskConfigId = $map['SchemeTaskConfigId'];
        }
        if (isset($map['SchemeTaskConfigName'])) {
            $model->schemeTaskConfigName = $map['SchemeTaskConfigName'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }
        if (isset($map['SessionGroupId'])) {
            $model->sessionGroupId = $map['SessionGroupId'];
        }
        if (isset($map['SessionGroupReviewedOrComplained'])) {
            $model->sessionGroupReviewedOrComplained = $map['SessionGroupReviewedOrComplained'];
        }
        if (isset($map['SkillGroupNameList'])) {
            $model->skillGroupNameList = skillGroupNameList::fromMap($map['SkillGroupNameList']);
        }

        return $model;
    }
}
