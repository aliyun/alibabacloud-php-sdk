<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\IdpSyncConfig\idpDepartmentInfos;

class IdpSyncConfig extends Model
{
    /**
     * @var bool
     */
    public $autoSyncEnabled;

    /**
     * @var idpDepartmentInfos[]
     */
    public $idpDepartmentInfos;

    /**
     * @var int
     */
    public $scheduleSyncIntervalSecond;

    /**
     * @var bool
     */
    public $userSyncEnabled;
    protected $_name = [
        'autoSyncEnabled' => 'AutoSyncEnabled',
        'idpDepartmentInfos' => 'IdpDepartmentInfos',
        'scheduleSyncIntervalSecond' => 'ScheduleSyncIntervalSecond',
        'userSyncEnabled' => 'UserSyncEnabled',
    ];

    public function validate()
    {
        if (\is_array($this->idpDepartmentInfos)) {
            Model::validateArray($this->idpDepartmentInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoSyncEnabled) {
            $res['AutoSyncEnabled'] = $this->autoSyncEnabled;
        }

        if (null !== $this->idpDepartmentInfos) {
            if (\is_array($this->idpDepartmentInfos)) {
                $res['IdpDepartmentInfos'] = [];
                $n1 = 0;
                foreach ($this->idpDepartmentInfos as $item1) {
                    $res['IdpDepartmentInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scheduleSyncIntervalSecond) {
            $res['ScheduleSyncIntervalSecond'] = $this->scheduleSyncIntervalSecond;
        }

        if (null !== $this->userSyncEnabled) {
            $res['UserSyncEnabled'] = $this->userSyncEnabled;
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
        if (isset($map['AutoSyncEnabled'])) {
            $model->autoSyncEnabled = $map['AutoSyncEnabled'];
        }

        if (isset($map['IdpDepartmentInfos'])) {
            if (!empty($map['IdpDepartmentInfos'])) {
                $model->idpDepartmentInfos = [];
                $n1 = 0;
                foreach ($map['IdpDepartmentInfos'] as $item1) {
                    $model->idpDepartmentInfos[$n1] = idpDepartmentInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ScheduleSyncIntervalSecond'])) {
            $model->scheduleSyncIntervalSecond = $map['ScheduleSyncIntervalSecond'];
        }

        if (isset($map['UserSyncEnabled'])) {
            $model->userSyncEnabled = $map['UserSyncEnabled'];
        }

        return $model;
    }
}
