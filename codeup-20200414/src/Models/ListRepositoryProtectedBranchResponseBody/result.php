<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryProtectedBranchResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryProtectedBranchResponseBody\result\mergeRequestSetting;
use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryProtectedBranchResponseBody\result\testSetting;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int[]
     */
    public $allowMergeRoles;

    /**
     * @var int[]
     */
    public $allowPushRoles;

    /**
     * @var string
     */
    public $branch;

    /**
     * @var int
     */
    public $id;

    /**
     * @var mergeRequestSetting
     */
    public $mergeRequestSetting;

    /**
     * @var testSetting
     */
    public $testSetting;
    protected $_name = [
        'allowMergeRoles'     => 'AllowMergeRoles',
        'allowPushRoles'      => 'AllowPushRoles',
        'branch'              => 'Branch',
        'id'                  => 'Id',
        'mergeRequestSetting' => 'MergeRequestSetting',
        'testSetting'         => 'TestSetting',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowMergeRoles) {
            $res['AllowMergeRoles'] = $this->allowMergeRoles;
        }
        if (null !== $this->allowPushRoles) {
            $res['AllowPushRoles'] = $this->allowPushRoles;
        }
        if (null !== $this->branch) {
            $res['Branch'] = $this->branch;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['AllowMergeRoles'])) {
            if (!empty($map['AllowMergeRoles'])) {
                $model->allowMergeRoles = $map['AllowMergeRoles'];
            }
        }
        if (isset($map['AllowPushRoles'])) {
            if (!empty($map['AllowPushRoles'])) {
                $model->allowPushRoles = $map['AllowPushRoles'];
            }
        }
        if (isset($map['Branch'])) {
            $model->branch = $map['Branch'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
