<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SyncOrgStructureRequest\departments;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\SyncOrgStructureRequest\members;

class SyncOrgStructureRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var departments[]
     */
    public $departments;

    /**
     * @var members[]
     */
    public $members;

    /**
     * @var string
     */
    public $platformType;

    /**
     * @var string
     */
    public $ssoSettingsId;

    /**
     * @var bool
     */
    public $syncMembers;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'corpId' => 'corpId',
        'departments' => 'departments',
        'members' => 'members',
        'platformType' => 'platformType',
        'ssoSettingsId' => 'ssoSettingsId',
        'syncMembers' => 'syncMembers',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->departments)) {
            Model::validateArray($this->departments);
        }
        if (\is_array($this->members)) {
            Model::validateArray($this->members);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }

        if (null !== $this->departments) {
            if (\is_array($this->departments)) {
                $res['departments'] = [];
                $n1 = 0;
                foreach ($this->departments as $item1) {
                    $res['departments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->members) {
            if (\is_array($this->members)) {
                $res['members'] = [];
                $n1 = 0;
                foreach ($this->members as $item1) {
                    $res['members'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->platformType) {
            $res['platformType'] = $this->platformType;
        }

        if (null !== $this->ssoSettingsId) {
            $res['ssoSettingsId'] = $this->ssoSettingsId;
        }

        if (null !== $this->syncMembers) {
            $res['syncMembers'] = $this->syncMembers;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }

        if (isset($map['departments'])) {
            if (!empty($map['departments'])) {
                $model->departments = [];
                $n1 = 0;
                foreach ($map['departments'] as $item1) {
                    $model->departments[$n1] = departments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['members'])) {
            if (!empty($map['members'])) {
                $model->members = [];
                $n1 = 0;
                foreach ($map['members'] as $item1) {
                    $model->members[$n1] = members::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['platformType'])) {
            $model->platformType = $map['platformType'];
        }

        if (isset($map['ssoSettingsId'])) {
            $model->ssoSettingsId = $map['ssoSettingsId'];
        }

        if (isset($map['syncMembers'])) {
            $model->syncMembers = $map['syncMembers'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
