<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\CreateRepositoryProtectedBranchResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateRepositoryProtectedBranchResponseBody\result\mergeRequestSetting;
use AlibabaCloud\SDK\Codeup\V20200414\Models\CreateRepositoryProtectedBranchResponseBody\result\testSetting;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $branch;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int[]
     */
    public $allowPushRoles;

    /**
     * @var int[]
     */
    public $allowMergeRoles;

    /**
     * @var mergeRequestSetting
     */
    public $mergeRequestSetting;

    /**
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
