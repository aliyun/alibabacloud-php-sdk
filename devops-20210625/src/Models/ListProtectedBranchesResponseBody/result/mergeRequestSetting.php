<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListProtectedBranchesResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProtectedBranchesResponseBody\result\mergeRequestSetting\defaultAssignees;

class mergeRequestSetting extends Model
{
    /**
     * @var int[]
     */
    public $allowMergeRequestRoles;

    /**
     * @var defaultAssignees[]
     */
    public $defaultAssignees;

    /**
     * @var bool
     */
    public $isAllowSelfApproval;

    /**
     * @var bool
     */
    public $isRequireDiscussionProcessed;

    /**
     * @var bool
     */
    public $isRequired;

    /**
     * @var bool
     */
    public $isResetApprovalWhenNewPush;

    /**
     * @var int
     */
    public $minimumApproval;

    /**
     * @var string
     */
    public $mrMode;

    /**
     * @var string
     */
    public $whiteList;
    protected $_name = [
        'allowMergeRequestRoles' => 'allowMergeRequestRoles',
        'defaultAssignees' => 'defaultAssignees',
        'isAllowSelfApproval' => 'isAllowSelfApproval',
        'isRequireDiscussionProcessed' => 'isRequireDiscussionProcessed',
        'isRequired' => 'isRequired',
        'isResetApprovalWhenNewPush' => 'isResetApprovalWhenNewPush',
        'minimumApproval' => 'minimumApproval',
        'mrMode' => 'mrMode',
        'whiteList' => 'whiteList',
    ];

    public function validate()
    {
        if (\is_array($this->allowMergeRequestRoles)) {
            Model::validateArray($this->allowMergeRequestRoles);
        }
        if (\is_array($this->defaultAssignees)) {
            Model::validateArray($this->defaultAssignees);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowMergeRequestRoles) {
            if (\is_array($this->allowMergeRequestRoles)) {
                $res['allowMergeRequestRoles'] = [];
                $n1 = 0;
                foreach ($this->allowMergeRequestRoles as $item1) {
                    $res['allowMergeRequestRoles'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->defaultAssignees) {
            if (\is_array($this->defaultAssignees)) {
                $res['defaultAssignees'] = [];
                $n1 = 0;
                foreach ($this->defaultAssignees as $item1) {
                    $res['defaultAssignees'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isAllowSelfApproval) {
            $res['isAllowSelfApproval'] = $this->isAllowSelfApproval;
        }

        if (null !== $this->isRequireDiscussionProcessed) {
            $res['isRequireDiscussionProcessed'] = $this->isRequireDiscussionProcessed;
        }

        if (null !== $this->isRequired) {
            $res['isRequired'] = $this->isRequired;
        }

        if (null !== $this->isResetApprovalWhenNewPush) {
            $res['isResetApprovalWhenNewPush'] = $this->isResetApprovalWhenNewPush;
        }

        if (null !== $this->minimumApproval) {
            $res['minimumApproval'] = $this->minimumApproval;
        }

        if (null !== $this->mrMode) {
            $res['mrMode'] = $this->mrMode;
        }

        if (null !== $this->whiteList) {
            $res['whiteList'] = $this->whiteList;
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
        if (isset($map['allowMergeRequestRoles'])) {
            if (!empty($map['allowMergeRequestRoles'])) {
                $model->allowMergeRequestRoles = [];
                $n1 = 0;
                foreach ($map['allowMergeRequestRoles'] as $item1) {
                    $model->allowMergeRequestRoles[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['defaultAssignees'])) {
            if (!empty($map['defaultAssignees'])) {
                $model->defaultAssignees = [];
                $n1 = 0;
                foreach ($map['defaultAssignees'] as $item1) {
                    $model->defaultAssignees[$n1] = defaultAssignees::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['isAllowSelfApproval'])) {
            $model->isAllowSelfApproval = $map['isAllowSelfApproval'];
        }

        if (isset($map['isRequireDiscussionProcessed'])) {
            $model->isRequireDiscussionProcessed = $map['isRequireDiscussionProcessed'];
        }

        if (isset($map['isRequired'])) {
            $model->isRequired = $map['isRequired'];
        }

        if (isset($map['isResetApprovalWhenNewPush'])) {
            $model->isResetApprovalWhenNewPush = $map['isResetApprovalWhenNewPush'];
        }

        if (isset($map['minimumApproval'])) {
            $model->minimumApproval = $map['minimumApproval'];
        }

        if (isset($map['mrMode'])) {
            $model->mrMode = $map['mrMode'];
        }

        if (isset($map['whiteList'])) {
            $model->whiteList = $map['whiteList'];
        }

        return $model;
    }
}
