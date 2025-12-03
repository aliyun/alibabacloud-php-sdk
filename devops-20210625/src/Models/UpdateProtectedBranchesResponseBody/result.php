<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesResponseBody\result\mergeRequestSetting;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesResponseBody\result\testSettingDTO;

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
     * @var testSettingDTO
     */
    public $testSettingDTO;
    protected $_name = [
        'allowMergeRoles' => 'allowMergeRoles',
        'allowMergeUserIds' => 'allowMergeUserIds',
        'allowPushRoles' => 'allowPushRoles',
        'allowPushUserIds' => 'allowPushUserIds',
        'branch' => 'branch',
        'id' => 'id',
        'mergeRequestSetting' => 'mergeRequestSetting',
        'testSettingDTO' => 'testSettingDTO',
    ];

    public function validate()
    {
        if (\is_array($this->allowMergeRoles)) {
            Model::validateArray($this->allowMergeRoles);
        }
        if (\is_array($this->allowMergeUserIds)) {
            Model::validateArray($this->allowMergeUserIds);
        }
        if (\is_array($this->allowPushRoles)) {
            Model::validateArray($this->allowPushRoles);
        }
        if (\is_array($this->allowPushUserIds)) {
            Model::validateArray($this->allowPushUserIds);
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
                $n1 = 0;
                foreach ($this->allowMergeRoles as $item1) {
                    $res['allowMergeRoles'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->allowMergeUserIds) {
            if (\is_array($this->allowMergeUserIds)) {
                $res['allowMergeUserIds'] = [];
                $n1 = 0;
                foreach ($this->allowMergeUserIds as $item1) {
                    $res['allowMergeUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->allowPushRoles) {
            if (\is_array($this->allowPushRoles)) {
                $res['allowPushRoles'] = [];
                $n1 = 0;
                foreach ($this->allowPushRoles as $item1) {
                    $res['allowPushRoles'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->allowPushUserIds) {
            if (\is_array($this->allowPushUserIds)) {
                $res['allowPushUserIds'] = [];
                $n1 = 0;
                foreach ($this->allowPushUserIds as $item1) {
                    $res['allowPushUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->branch) {
            $res['branch'] = $this->branch;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->mergeRequestSetting) {
            $res['mergeRequestSetting'] = null !== $this->mergeRequestSetting ? $this->mergeRequestSetting->toArray($noStream) : $this->mergeRequestSetting;
        }

        if (null !== $this->testSettingDTO) {
            $res['testSettingDTO'] = null !== $this->testSettingDTO ? $this->testSettingDTO->toArray($noStream) : $this->testSettingDTO;
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
                $n1 = 0;
                foreach ($map['allowMergeRoles'] as $item1) {
                    $model->allowMergeRoles[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['allowMergeUserIds'])) {
            if (!empty($map['allowMergeUserIds'])) {
                $model->allowMergeUserIds = [];
                $n1 = 0;
                foreach ($map['allowMergeUserIds'] as $item1) {
                    $model->allowMergeUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['allowPushRoles'])) {
            if (!empty($map['allowPushRoles'])) {
                $model->allowPushRoles = [];
                $n1 = 0;
                foreach ($map['allowPushRoles'] as $item1) {
                    $model->allowPushRoles[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['allowPushUserIds'])) {
            if (!empty($map['allowPushUserIds'])) {
                $model->allowPushUserIds = [];
                $n1 = 0;
                foreach ($map['allowPushUserIds'] as $item1) {
                    $model->allowPushUserIds[$n1] = $item1;
                    ++$n1;
                }
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
