<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateProtectdBranchResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateProtectdBranchResponseBody\result\mergeRequestSetting;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateProtectdBranchResponseBody\result\testSettingDTO;
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
    public $allowMergeUserIds;

    /**
     * @var int[]
     */
    public $allowPushRoles;

    /**
     * @var int[]
     */
    public $allowPushUserIds;

    /**
     * @example protectBranch
     *
     * @var string
     */
    public $branch;

    /**
     * @example 5240
     *
     * @var int
     */
    public $id;

    /**
     * @var mergeRequestSetting
     */
    public $mergeRequestSetting;

    /**
     * @var testSettingDTO
     */
    public $testSettingDTO;
    protected $_name = [
        'allowMergeRoles'     => 'allowMergeRoles',
        'allowMergeUserIds'   => 'allowMergeUserIds',
        'allowPushRoles'      => 'allowPushRoles',
        'allowPushUserIds'    => 'allowPushUserIds',
        'branch'              => 'branch',
        'id'                  => 'id',
        'mergeRequestSetting' => 'mergeRequestSetting',
        'testSettingDTO'      => 'testSettingDTO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowMergeRoles) {
            $res['allowMergeRoles'] = $this->allowMergeRoles;
        }
        if (null !== $this->allowMergeUserIds) {
            $res['allowMergeUserIds'] = $this->allowMergeUserIds;
        }
        if (null !== $this->allowPushRoles) {
            $res['allowPushRoles'] = $this->allowPushRoles;
        }
        if (null !== $this->allowPushUserIds) {
            $res['allowPushUserIds'] = $this->allowPushUserIds;
        }
        if (null !== $this->branch) {
            $res['branch'] = $this->branch;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->mergeRequestSetting) {
            $res['mergeRequestSetting'] = null !== $this->mergeRequestSetting ? $this->mergeRequestSetting->toMap() : null;
        }
        if (null !== $this->testSettingDTO) {
            $res['testSettingDTO'] = null !== $this->testSettingDTO ? $this->testSettingDTO->toMap() : null;
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
        if (isset($map['allowMergeRoles'])) {
            if (!empty($map['allowMergeRoles'])) {
                $model->allowMergeRoles = $map['allowMergeRoles'];
            }
        }
        if (isset($map['allowMergeUserIds'])) {
            if (!empty($map['allowMergeUserIds'])) {
                $model->allowMergeUserIds = $map['allowMergeUserIds'];
            }
        }
        if (isset($map['allowPushRoles'])) {
            if (!empty($map['allowPushRoles'])) {
                $model->allowPushRoles = $map['allowPushRoles'];
            }
        }
        if (isset($map['allowPushUserIds'])) {
            if (!empty($map['allowPushUserIds'])) {
                $model->allowPushUserIds = $map['allowPushUserIds'];
            }
        }
        if (isset($map['branch'])) {
            $model->branch = $map['branch'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['mergeRequestSetting'])) {
            $model->mergeRequestSetting = mergeRequestSetting::fromMap($map['mergeRequestSetting']);
        }
        if (isset($map['testSettingDTO'])) {
            $model->testSettingDTO = testSettingDTO::fromMap($map['testSettingDTO']);
        }

        return $model;
    }
}
