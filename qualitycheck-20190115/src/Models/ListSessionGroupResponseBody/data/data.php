<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data\callerList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data\customerIdList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data\customerNameList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data\customerServiceIdList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data\customerServiceNameList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data\reviewerList;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data\skillGroupNameList;

class data extends Model
{
    /**
     * @var int
     */
    public $assignStatus;
    /**
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
     * @var int
     */
    public $hitSessionCount;
    /**
     * @var string
     */
    public $lastDataId;
    /**
     * @var int
     */
    public $reviewStatus;
    /**
     * @var reviewerList
     */
    public $reviewerList;
    /**
     * @var int
     */
    public $schemeTaskConfigId;
    /**
     * @var string
     */
    public $schemeTaskConfigName;
    /**
     * @var int
     */
    public $score;
    /**
     * @var int
     */
    public $sessionCount;
    /**
     * @var string
     */
    public $sessionGroupId;
    /**
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
        if (null !== $this->callerList) {
            $this->callerList->validate();
        }
        if (null !== $this->customerIdList) {
            $this->customerIdList->validate();
        }
        if (null !== $this->customerNameList) {
            $this->customerNameList->validate();
        }
        if (null !== $this->customerServiceIdList) {
            $this->customerServiceIdList->validate();
        }
        if (null !== $this->customerServiceNameList) {
            $this->customerServiceNameList->validate();
        }
        if (null !== $this->reviewerList) {
            $this->reviewerList->validate();
        }
        if (null !== $this->skillGroupNameList) {
            $this->skillGroupNameList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignStatus) {
            $res['AssignStatus'] = $this->assignStatus;
        }

        if (null !== $this->callStartTime) {
            $res['CallStartTime'] = $this->callStartTime;
        }

        if (null !== $this->callerList) {
            $res['CallerList'] = null !== $this->callerList ? $this->callerList->toArray($noStream) : $this->callerList;
        }

        if (null !== $this->customerIdList) {
            $res['CustomerIdList'] = null !== $this->customerIdList ? $this->customerIdList->toArray($noStream) : $this->customerIdList;
        }

        if (null !== $this->customerNameList) {
            $res['CustomerNameList'] = null !== $this->customerNameList ? $this->customerNameList->toArray($noStream) : $this->customerNameList;
        }

        if (null !== $this->customerServiceIdList) {
            $res['CustomerServiceIdList'] = null !== $this->customerServiceIdList ? $this->customerServiceIdList->toArray($noStream) : $this->customerServiceIdList;
        }

        if (null !== $this->customerServiceNameList) {
            $res['CustomerServiceNameList'] = null !== $this->customerServiceNameList ? $this->customerServiceNameList->toArray($noStream) : $this->customerServiceNameList;
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
            $res['ReviewerList'] = null !== $this->reviewerList ? $this->reviewerList->toArray($noStream) : $this->reviewerList;
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
            $res['SkillGroupNameList'] = null !== $this->skillGroupNameList ? $this->skillGroupNameList->toArray($noStream) : $this->skillGroupNameList;
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
