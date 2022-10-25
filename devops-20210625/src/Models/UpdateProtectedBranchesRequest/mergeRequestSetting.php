<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesRequest;

use AlibabaCloud\Tea\Model;

class mergeRequestSetting extends Model
{
    /**
     * @var int[]
     */
    public $allowMergeRequestRoles;

    /**
     * @var int[]
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
        'allowMergeRequestRoles'       => 'allowMergeRequestRoles',
        'defaultAssignees'             => 'defaultAssignees',
        'isAllowSelfApproval'          => 'isAllowSelfApproval',
        'isRequireDiscussionProcessed' => 'isRequireDiscussionProcessed',
        'isRequired'                   => 'isRequired',
        'isResetApprovalWhenNewPush'   => 'isResetApprovalWhenNewPush',
        'minimumApproval'              => 'minimumApproval',
        'mrMode'                       => 'mrMode',
        'whiteList'                    => 'whiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowMergeRequestRoles) {
            $res['allowMergeRequestRoles'] = $this->allowMergeRequestRoles;
        }
        if (null !== $this->defaultAssignees) {
            $res['defaultAssignees'] = $this->defaultAssignees;
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

    /**
     * @param array $map
     *
     * @return mergeRequestSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowMergeRequestRoles'])) {
            if (!empty($map['allowMergeRequestRoles'])) {
                $model->allowMergeRequestRoles = $map['allowMergeRequestRoles'];
            }
        }
        if (isset($map['defaultAssignees'])) {
            if (!empty($map['defaultAssignees'])) {
                $model->defaultAssignees = $map['defaultAssignees'];
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
