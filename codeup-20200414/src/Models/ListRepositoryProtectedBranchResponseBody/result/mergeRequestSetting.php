<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryProtectedBranchResponseBody\result;

use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryProtectedBranchResponseBody\result\mergeRequestSetting\defaultAssignees;
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
     * @var defaultAssignees[]
     */
    public $defaultAssignees;

    /**
     * @var bool
     */
    public $isRequireDiscussionProcessed;

    /**
     * @var string
     */
    public $mergeRequestMode;

    /**
     * @var int
     */
    public $minimumApproval;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var string
     */
    public $whiteList;
    protected $_name = [
        'allowMergeRequestRoles'       => 'AllowMergeRequestRoles',
        'allowSelfApproval'            => 'AllowSelfApproval',
        'defaultAssignees'             => 'DefaultAssignees',
        'isRequireDiscussionProcessed' => 'IsRequireDiscussionProcessed',
        'mergeRequestMode'             => 'MergeRequestMode',
        'minimumApproval'              => 'MinimumApproval',
        'required'                     => 'Required',
        'whiteList'                    => 'WhiteList',
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
            $res['DefaultAssignees'] = [];
            if (null !== $this->defaultAssignees && \is_array($this->defaultAssignees)) {
                $n = 0;
                foreach ($this->defaultAssignees as $item) {
                    $res['DefaultAssignees'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isRequireDiscussionProcessed) {
            $res['IsRequireDiscussionProcessed'] = $this->isRequireDiscussionProcessed;
        }
        if (null !== $this->mergeRequestMode) {
            $res['MergeRequestMode'] = $this->mergeRequestMode;
        }
        if (null !== $this->minimumApproval) {
            $res['MinimumApproval'] = $this->minimumApproval;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
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
                $model->defaultAssignees = [];
                $n                       = 0;
                foreach ($map['DefaultAssignees'] as $item) {
                    $model->defaultAssignees[$n++] = null !== $item ? defaultAssignees::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsRequireDiscussionProcessed'])) {
            $model->isRequireDiscussionProcessed = $map['IsRequireDiscussionProcessed'];
        }
        if (isset($map['MergeRequestMode'])) {
            $model->mergeRequestMode = $map['MergeRequestMode'];
        }
        if (isset($map['MinimumApproval'])) {
            $model->minimumApproval = $map['MinimumApproval'];
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }
        if (isset($map['WhiteList'])) {
            $model->whiteList = $map['WhiteList'];
        }

        return $model;
    }
}
