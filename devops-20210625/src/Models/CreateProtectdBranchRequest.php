<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateProtectdBranchRequest\mergeRequestSetting;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateProtectdBranchRequest\testSettingDTO;
use AlibabaCloud\Tea\Model;

class CreateProtectdBranchRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @var int[]
     */
    public $allowMergeRoles;

    /**
     * @var string[]
     */
    public $allowMergeUserIds;

    /**
     * @var int[]
     */
    public $allowPushRoles;

    /**
     * @var string[]
     */
    public $allowPushUserIds;

    /**
     * @example protectBranch
     *
     * @var string
     */
    public $branch;

    /**
     * @example --
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

    /**
     * @example 60de7a6852743a5162b5f957
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken'         => 'accessToken',
        'allowMergeRoles'     => 'allowMergeRoles',
        'allowMergeUserIds'   => 'allowMergeUserIds',
        'allowPushRoles'      => 'allowPushRoles',
        'allowPushUserIds'    => 'allowPushUserIds',
        'branch'              => 'branch',
        'id'                  => 'id',
        'mergeRequestSetting' => 'mergeRequestSetting',
        'testSettingDTO'      => 'testSettingDTO',
        'organizationId'      => 'organizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }
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
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProtectdBranchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
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
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
