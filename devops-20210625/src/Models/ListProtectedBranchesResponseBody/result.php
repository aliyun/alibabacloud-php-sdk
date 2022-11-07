<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListProtectedBranchesResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListProtectedBranchesResponseBody\result\allowMergeUsers;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProtectedBranchesResponseBody\result\allowPushUsers;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProtectedBranchesResponseBody\result\mergeRequestSetting;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProtectedBranchesResponseBody\result\testSettingDTO;
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
     * @var allowMergeUsers[]
     */
    public $allowMergeUsers;

    /**
     * @var int[]
     */
    public $allowPushRoles;

    /**
     * @var int[]
     */
    public $allowPushUserIds;

    /**
     * @var allowPushUsers[]
     */
    public $allowPushUsers;

    /**
     * @var string
     */
    public $branch;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string[]
     */
    public $matches;

    /**
     * @var mergeRequestSetting
     */
    public $mergeRequestSetting;

    /**
     * @var testSettingDTO
     */
    public $testSettingDTO;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'allowMergeRoles'     => 'allowMergeRoles',
        'allowMergeUserIds'   => 'allowMergeUserIds',
        'allowMergeUsers'     => 'allowMergeUsers',
        'allowPushRoles'      => 'allowPushRoles',
        'allowPushUserIds'    => 'allowPushUserIds',
        'allowPushUsers'      => 'allowPushUsers',
        'branch'              => 'branch',
        'createdAt'           => 'createdAt',
        'id'                  => 'id',
        'matches'             => 'matches',
        'mergeRequestSetting' => 'mergeRequestSetting',
        'testSettingDTO'      => 'testSettingDTO',
        'updatedAt'           => 'updatedAt',
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
        if (null !== $this->allowMergeUsers) {
            $res['allowMergeUsers'] = [];
            if (null !== $this->allowMergeUsers && \is_array($this->allowMergeUsers)) {
                $n = 0;
                foreach ($this->allowMergeUsers as $item) {
                    $res['allowMergeUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->allowPushRoles) {
            $res['allowPushRoles'] = $this->allowPushRoles;
        }
        if (null !== $this->allowPushUserIds) {
            $res['allowPushUserIds'] = $this->allowPushUserIds;
        }
        if (null !== $this->allowPushUsers) {
            $res['allowPushUsers'] = [];
            if (null !== $this->allowPushUsers && \is_array($this->allowPushUsers)) {
                $n = 0;
                foreach ($this->allowPushUsers as $item) {
                    $res['allowPushUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->branch) {
            $res['branch'] = $this->branch;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->matches) {
            $res['matches'] = $this->matches;
        }
        if (null !== $this->mergeRequestSetting) {
            $res['mergeRequestSetting'] = null !== $this->mergeRequestSetting ? $this->mergeRequestSetting->toMap() : null;
        }
        if (null !== $this->testSettingDTO) {
            $res['testSettingDTO'] = null !== $this->testSettingDTO ? $this->testSettingDTO->toMap() : null;
        }
        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['allowMergeUsers'])) {
            if (!empty($map['allowMergeUsers'])) {
                $model->allowMergeUsers = [];
                $n                      = 0;
                foreach ($map['allowMergeUsers'] as $item) {
                    $model->allowMergeUsers[$n++] = null !== $item ? allowMergeUsers::fromMap($item) : $item;
                }
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
        if (isset($map['allowPushUsers'])) {
            if (!empty($map['allowPushUsers'])) {
                $model->allowPushUsers = [];
                $n                     = 0;
                foreach ($map['allowPushUsers'] as $item) {
                    $model->allowPushUsers[$n++] = null !== $item ? allowPushUsers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['branch'])) {
            $model->branch = $map['branch'];
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['matches'])) {
            if (!empty($map['matches'])) {
                $model->matches = $map['matches'];
            }
        }
        if (isset($map['mergeRequestSetting'])) {
            $model->mergeRequestSetting = mergeRequestSetting::fromMap($map['mergeRequestSetting']);
        }
        if (isset($map['testSettingDTO'])) {
            $model->testSettingDTO = testSettingDTO::fromMap($map['testSettingDTO']);
        }
        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
