<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\IdpSyncConfig\idpDepartmentInfos;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSyncEnabled) {
            $res['AutoSyncEnabled'] = $this->autoSyncEnabled;
        }
        if (null !== $this->idpDepartmentInfos) {
            $res['IdpDepartmentInfos'] = [];
            if (null !== $this->idpDepartmentInfos && \is_array($this->idpDepartmentInfos)) {
                $n = 0;
                foreach ($this->idpDepartmentInfos as $item) {
                    $res['IdpDepartmentInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return IdpSyncConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoSyncEnabled'])) {
            $model->autoSyncEnabled = $map['AutoSyncEnabled'];
        }
        if (isset($map['IdpDepartmentInfos'])) {
            if (!empty($map['IdpDepartmentInfos'])) {
                $model->idpDepartmentInfos = [];
                $n = 0;
                foreach ($map['IdpDepartmentInfos'] as $item) {
                    $model->idpDepartmentInfos[$n++] = null !== $item ? idpDepartmentInfos::fromMap($item) : $item;
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
