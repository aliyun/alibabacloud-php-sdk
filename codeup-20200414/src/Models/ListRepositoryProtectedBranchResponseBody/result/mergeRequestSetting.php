<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryProtectedBranchResponseBody\result;

use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryProtectedBranchResponseBody\result\mergeRequestSetting\defaultAssignees;
use AlibabaCloud\Tea\Model;

class mergeRequestSetting extends Model
{
    /**
     * @description 评审模式。  general：普通 codeowner：CodeOwner模式
     *
     * @var string
     */
    public $mergeRequestMode;

    /**
     * @description 是否允许创建者通过代码评审。
     *
     * @var bool
     */
    public $allowSelfApproval;

    /**
     * @description 是否要求评论全部已解决。
     *
     * @var bool
     */
    public $isRequireDiscussionProcessed;

    /**
     * @description 是否要求合并前通过代码评审。
     *
     * @var bool
     */
    public $required;

    /**
     * @description 评审通过的最少人数。  注：仅普通模式生效。
     *
     * @var int
     */
    public $minimumApproval;

    /**
     * @description 默认评审者。  注：云效用户 ID 列表。
     *
     * @var defaultAssignees[]
     */
    public $defaultAssignees;

    /**
     * @description 允许通过代码评审的角色。  40：管理员  30：开发者
     *
     * @var int[]
     */
    public $allowMergeRequestRoles;

    /**
     * @description 评审文件白名单
     *
     * @var string
     */
    public $whiteList;
    protected $_name = [
        'mergeRequestMode'             => 'MergeRequestMode',
        'allowSelfApproval'            => 'AllowSelfApproval',
        'isRequireDiscussionProcessed' => 'IsRequireDiscussionProcessed',
        'required'                     => 'Required',
        'minimumApproval'              => 'MinimumApproval',
        'defaultAssignees'             => 'DefaultAssignees',
        'allowMergeRequestRoles'       => 'AllowMergeRequestRoles',
        'whiteList'                    => 'WhiteList',
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
        if (null !== $this->minimumApproval) {
            $res['MinimumApproval'] = $this->minimumApproval;
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
        if (null !== $this->allowMergeRequestRoles) {
            $res['AllowMergeRequestRoles'] = $this->allowMergeRequestRoles;
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
        if (isset($map['MinimumApproval'])) {
            $model->minimumApproval = $map['MinimumApproval'];
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
        if (isset($map['AllowMergeRequestRoles'])) {
            if (!empty($map['AllowMergeRequestRoles'])) {
                $model->allowMergeRequestRoles = $map['AllowMergeRequestRoles'];
            }
        }
        if (isset($map['WhiteList'])) {
            $model->whiteList = $map['WhiteList'];
        }

        return $model;
    }
}
