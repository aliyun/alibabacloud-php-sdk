<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\CreateRepositoryProtectedBranchResponseBody\result;

use AlibabaCloud\Tea\Model;

class mergeRequestSetting extends Model
{
    /**
     * @var string
     */
    public $mergeRequestMode;

    /**
     * @var bool
     */
    public $allowSelfApproval;

    /**
     * @var bool
     */
    public $isRequireDiscussionProcessed;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var bool
     */
    public $isResetApprovalWhenNewPush;

    /**
     * @var int
     */
    public $minimualApproval;

    /**
     * @var string[]
     */
    public $defaultAssignees;

    /**
     * @var int[]
     */
    public $allowMergeRequestRoles;
    protected $_name = [
        'mergeRequestMode'             => 'MergeRequestMode',
        'allowSelfApproval'            => 'AllowSelfApproval',
        'isRequireDiscussionProcessed' => 'IsRequireDiscussionProcessed',
        'required'                     => 'Required',
        'isResetApprovalWhenNewPush'   => 'IsResetApprovalWhenNewPush',
        'minimualApproval'             => 'MinimualApproval',
        'defaultAssignees'             => 'DefaultAssignees',
        'allowMergeRequestRoles'       => 'AllowMergeRequestRoles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mergeRequestMode) {
            $res['MergeRequestMode'] = $this->mergeRequestMode;
        }
        if (null !== $this->allowSelfApproval) {
            $res['AllowSelfApproval'] = $this->allowSelfApproval;
        }
        if (null !== $this->isRequireDiscussionProcessed) {
            $res['IsRequireDiscussionProcessed'] = $this->isRequireDiscussionProcessed;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }
        if (null !== $this->isResetApprovalWhenNewPush) {
            $res['IsResetApprovalWhenNewPush'] = $this->isResetApprovalWhenNewPush;
        }
        if (null !== $this->minimualApproval) {
            $res['MinimualApproval'] = $this->minimualApproval;
        }
        if (null !== $this->defaultAssignees) {
            $res['DefaultAssignees'] = $this->defaultAssignees;
        }
        if (null !== $this->allowMergeRequestRoles) {
            $res['AllowMergeRequestRoles'] = $this->allowMergeRequestRoles;
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
        if (isset($map['MergeRequestMode'])) {
            $model->mergeRequestMode = $map['MergeRequestMode'];
        }
        if (isset($map['AllowSelfApproval'])) {
            $model->allowSelfApproval = $map['AllowSelfApproval'];
        }
        if (isset($map['IsRequireDiscussionProcessed'])) {
            $model->isRequireDiscussionProcessed = $map['IsRequireDiscussionProcessed'];
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }
        if (isset($map['IsResetApprovalWhenNewPush'])) {
            $model->isResetApprovalWhenNewPush = $map['IsResetApprovalWhenNewPush'];
        }
        if (isset($map['MinimualApproval'])) {
            $model->minimualApproval = $map['MinimualApproval'];
        }
        if (isset($map['DefaultAssignees'])) {
            if (!empty($map['DefaultAssignees'])) {
                $model->defaultAssignees = $map['DefaultAssignees'];
            }
        }
        if (isset($map['AllowMergeRequestRoles'])) {
            if (!empty($map['AllowMergeRequestRoles'])) {
                $model->allowMergeRequestRoles = $map['AllowMergeRequestRoles'];
            }
        }

        return $model;
    }
}
