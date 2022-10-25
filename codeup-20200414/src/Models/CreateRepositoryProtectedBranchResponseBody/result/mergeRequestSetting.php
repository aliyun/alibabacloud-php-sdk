<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\CreateRepositoryProtectedBranchResponseBody\result;

use AlibabaCloud\Tea\Model;

class mergeRequestSetting extends Model
{
    /**
     * @var int[]
     */
    public $allowMergeRequestRoles;

    /**
     * @var bool
     */
    public $allowSelfApproval;

    /**
     * @var string[]
     */
    public $defaultAssignees;

    /**
     * @var bool
     */
    public $isRequireDiscussionProcessed;

    /**
     * @var bool
     */
    public $isResetApprovalWhenNewPush;

    /**
     * @var string
     */
    public $mergeRequestMode;

    /**
     * @var int
     */
    public $minimualApproval;

    /**
     * @var bool
     */
    public $required;
    protected $_name = [
        'allowMergeRequestRoles'       => 'AllowMergeRequestRoles',
        'allowSelfApproval'            => 'AllowSelfApproval',
        'defaultAssignees'             => 'DefaultAssignees',
        'isRequireDiscussionProcessed' => 'IsRequireDiscussionProcessed',
        'isResetApprovalWhenNewPush'   => 'IsResetApprovalWhenNewPush',
        'mergeRequestMode'             => 'MergeRequestMode',
        'minimualApproval'             => 'MinimualApproval',
        'required'                     => 'Required',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowMergeRequestRoles) {
            $res['AllowMergeRequestRoles'] = $this->allowMergeRequestRoles;
        }
        if (null !== $this->allowSelfApproval) {
            $res['AllowSelfApproval'] = $this->allowSelfApproval;
        }
        if (null !== $this->defaultAssignees) {
            $res['DefaultAssignees'] = $this->defaultAssignees;
        }
        if (null !== $this->isRequireDiscussionProcessed) {
            $res['IsRequireDiscussionProcessed'] = $this->isRequireDiscussionProcessed;
        }
        if (null !== $this->isResetApprovalWhenNewPush) {
            $res['IsResetApprovalWhenNewPush'] = $this->isResetApprovalWhenNewPush;
        }
        if (null !== $this->mergeRequestMode) {
            $res['MergeRequestMode'] = $this->mergeRequestMode;
        }
        if (null !== $this->minimualApproval) {
            $res['MinimualApproval'] = $this->minimualApproval;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
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
        if (isset($map['AllowMergeRequestRoles'])) {
            if (!empty($map['AllowMergeRequestRoles'])) {
                $model->allowMergeRequestRoles = $map['AllowMergeRequestRoles'];
            }
        }
        if (isset($map['AllowSelfApproval'])) {
            $model->allowSelfApproval = $map['AllowSelfApproval'];
        }
        if (isset($map['DefaultAssignees'])) {
            if (!empty($map['DefaultAssignees'])) {
                $model->defaultAssignees = $map['DefaultAssignees'];
            }
        }
        if (isset($map['IsRequireDiscussionProcessed'])) {
            $model->isRequireDiscussionProcessed = $map['IsRequireDiscussionProcessed'];
        }
        if (isset($map['IsResetApprovalWhenNewPush'])) {
            $model->isResetApprovalWhenNewPush = $map['IsResetApprovalWhenNewPush'];
        }
        if (isset($map['MergeRequestMode'])) {
            $model->mergeRequestMode = $map['MergeRequestMode'];
        }
        if (isset($map['MinimualApproval'])) {
            $model->minimualApproval = $map['MinimualApproval'];
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        return $model;
    }
}
