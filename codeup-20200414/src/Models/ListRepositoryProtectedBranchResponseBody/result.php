<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryProtectedBranchResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryProtectedBranchResponseBody\result\mergeRequestSetting;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryProtectedBranchResponseBody\result\testSetting;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 保护分支名称
     *
     * @var string
     */
    public $branch;

    /**
     * @description 保护分支 ID
     *
     * @var int
     */
    public $id;

    /**
     * @description 允许推送代码的角色。  40：管理员  30：开发者
     *
     * @var int[]
     */
    public $allowPushRoles;

    /**
     * @description 允许合并的角色。  40：管理员  30：开发者
     *
     * @var int[]
     */
    public $allowMergeRoles;

    /**
     * @description 代码评审设置
     *
     * @var mergeRequestSetting
     */
    public $mergeRequestSetting;

    /**
     * @description 自动化检查设置
     *
     * @var testSetting
     */
    public $testSetting;
    protected $_name = [
        'branch'              => 'Branch',
        'id'                  => 'Id',
        'allowPushRoles'      => 'AllowPushRoles',
        'allowMergeRoles'     => 'AllowMergeRoles',
        'mergeRequestSetting' => 'MergeRequestSetting',
        'testSetting'         => 'TestSetting',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->branch) {
            $res['Branch'] = $this->branch;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->allowPushRoles) {
            $res['AllowPushRoles'] = $this->allowPushRoles;
        }
        if (null !== $this->allowMergeRoles) {
            $res['AllowMergeRoles'] = $this->allowMergeRoles;
        }
        if (null !== $this->mergeRequestSetting) {
            $res['MergeRequestSetting'] = null !== $this->mergeRequestSetting ? $this->mergeRequestSetting->toMap() : null;
        }
        if (null !== $this->testSetting) {
            $res['TestSetting'] = null !== $this->testSetting ? $this->testSetting->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Branch'])) {
            $model->branch = $map['Branch'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['AllowPushRoles'])) {
            if (!empty($map['AllowPushRoles'])) {
                $model->allowPushRoles = $map['AllowPushRoles'];
            }
        }
        if (isset($map['AllowMergeRoles'])) {
            if (!empty($map['AllowMergeRoles'])) {
                $model->allowMergeRoles = $map['AllowMergeRoles'];
            }
        }
        if (isset($map['MergeRequestSetting'])) {
            $model->mergeRequestSetting = mergeRequestSetting::fromMap($map['MergeRequestSetting']);
        }
        if (isset($map['TestSetting'])) {
            $model->testSetting = testSetting::fromMap($map['TestSetting']);
        }

        return $model;
    }
}
