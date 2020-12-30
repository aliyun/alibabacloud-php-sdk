<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class UpdateFlexBackupGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $esnBizId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $backupGroupPolicy;

    /**
     * @var string
     */
    public $backups;

    /**
     * @var string
     */
    public $sharedBackups;
    protected $_name = [
        'sourceIp'          => 'SourceIp',
        'lang'              => 'Lang',
        'esnBizId'          => 'EsnBizId',
        'groupId'           => 'GroupId',
        'backupGroupPolicy' => 'BackupGroupPolicy',
        'backups'           => 'Backups',
        'sharedBackups'     => 'SharedBackups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->esnBizId) {
            $res['EsnBizId'] = $this->esnBizId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->backupGroupPolicy) {
            $res['BackupGroupPolicy'] = $this->backupGroupPolicy;
        }
        if (null !== $this->backups) {
            $res['Backups'] = $this->backups;
        }
        if (null !== $this->sharedBackups) {
            $res['SharedBackups'] = $this->sharedBackups;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFlexBackupGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['EsnBizId'])) {
            $model->esnBizId = $map['EsnBizId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['BackupGroupPolicy'])) {
            $model->backupGroupPolicy = $map['BackupGroupPolicy'];
        }
        if (isset($map['Backups'])) {
            $model->backups = $map['Backups'];
        }
        if (isset($map['SharedBackups'])) {
            $model->sharedBackups = $map['SharedBackups'];
        }

        return $model;
    }
}
