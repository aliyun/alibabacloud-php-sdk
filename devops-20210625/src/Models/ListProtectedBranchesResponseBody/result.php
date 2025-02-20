<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListProtectedBranchesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProtectedBranchesResponseBody\result\allowMergeUsers;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProtectedBranchesResponseBody\result\allowPushUsers;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProtectedBranchesResponseBody\result\mergeRequestSetting;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListProtectedBranchesResponseBody\result\testSettingDTO;

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
        if (\is_array($this->allowMergeRoles)) {
            Model::validateArray($this->allowMergeRoles);
        }
        if (\is_array($this->allowMergeUserIds)) {
            Model::validateArray($this->allowMergeUserIds);
        }
        if (\is_array($this->allowMergeUsers)) {
            Model::validateArray($this->allowMergeUsers);
        }
        if (\is_array($this->allowPushRoles)) {
            Model::validateArray($this->allowPushRoles);
        }
        if (\is_array($this->allowPushUserIds)) {
            Model::validateArray($this->allowPushUserIds);
        }
        if (\is_array($this->allowPushUsers)) {
            Model::validateArray($this->allowPushUsers);
        }
        if (\is_array($this->matches)) {
            Model::validateArray($this->matches);
        }
        if (null !== $this->mergeRequestSetting) {
            $this->mergeRequestSetting->validate();
        }
        if (null !== $this->testSettingDTO) {
            $this->testSettingDTO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowMergeRoles) {
            if (\is_array($this->allowMergeRoles)) {
                $res['allowMergeRoles'] = [];
                $n1                     = 0;
                foreach ($this->allowMergeRoles as $item1) {
                    $res['allowMergeRoles'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->allowMergeUserIds) {
            if (\is_array($this->allowMergeUserIds)) {
                $res['allowMergeUserIds'] = [];
                $n1                       = 0;
                foreach ($this->allowMergeUserIds as $item1) {
                    $res['allowMergeUserIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->allowMergeUsers) {
            if (\is_array($this->allowMergeUsers)) {
                $res['allowMergeUsers'] = [];
                $n1                     = 0;
                foreach ($this->allowMergeUsers as $item1) {
                    $res['allowMergeUsers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->allowPushRoles) {
            if (\is_array($this->allowPushRoles)) {
                $res['allowPushRoles'] = [];
                $n1                    = 0;
                foreach ($this->allowPushRoles as $item1) {
                    $res['allowPushRoles'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->allowPushUserIds) {
            if (\is_array($this->allowPushUserIds)) {
                $res['allowPushUserIds'] = [];
                $n1                      = 0;
                foreach ($this->allowPushUserIds as $item1) {
                    $res['allowPushUserIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->allowPushUsers) {
            if (\is_array($this->allowPushUsers)) {
                $res['allowPushUsers'] = [];
                $n1                    = 0;
                foreach ($this->allowPushUsers as $item1) {
                    $res['allowPushUsers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->matches)) {
                $res['matches'] = [];
                $n1             = 0;
                foreach ($this->matches as $item1) {
                    $res['matches'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->mergeRequestSetting) {
            $res['mergeRequestSetting'] = null !== $this->mergeRequestSetting ? $this->mergeRequestSetting->toArray($noStream) : $this->mergeRequestSetting;
        }

        if (null !== $this->testSettingDTO) {
            $res['testSettingDTO'] = null !== $this->testSettingDTO ? $this->testSettingDTO->toArray($noStream) : $this->testSettingDTO;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowMergeRoles'])) {
            if (!empty($map['allowMergeRoles'])) {
                $model->allowMergeRoles = [];
                $n1                     = 0;
                foreach ($map['allowMergeRoles'] as $item1) {
                    $model->allowMergeRoles[$n1++] = $item1;
                }
            }
        }

        if (isset($map['allowMergeUserIds'])) {
            if (!empty($map['allowMergeUserIds'])) {
                $model->allowMergeUserIds = [];
                $n1                       = 0;
                foreach ($map['allowMergeUserIds'] as $item1) {
                    $model->allowMergeUserIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['allowMergeUsers'])) {
            if (!empty($map['allowMergeUsers'])) {
                $model->allowMergeUsers = [];
                $n1                     = 0;
                foreach ($map['allowMergeUsers'] as $item1) {
                    $model->allowMergeUsers[$n1++] = allowMergeUsers::fromMap($item1);
                }
            }
        }

        if (isset($map['allowPushRoles'])) {
            if (!empty($map['allowPushRoles'])) {
                $model->allowPushRoles = [];
                $n1                    = 0;
                foreach ($map['allowPushRoles'] as $item1) {
                    $model->allowPushRoles[$n1++] = $item1;
                }
            }
        }

        if (isset($map['allowPushUserIds'])) {
            if (!empty($map['allowPushUserIds'])) {
                $model->allowPushUserIds = [];
                $n1                      = 0;
                foreach ($map['allowPushUserIds'] as $item1) {
                    $model->allowPushUserIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['allowPushUsers'])) {
            if (!empty($map['allowPushUsers'])) {
                $model->allowPushUsers = [];
                $n1                    = 0;
                foreach ($map['allowPushUsers'] as $item1) {
                    $model->allowPushUsers[$n1++] = allowPushUsers::fromMap($item1);
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
                $model->matches = [];
                $n1             = 0;
                foreach ($map['matches'] as $item1) {
                    $model->matches[$n1++] = $item1;
                }
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
