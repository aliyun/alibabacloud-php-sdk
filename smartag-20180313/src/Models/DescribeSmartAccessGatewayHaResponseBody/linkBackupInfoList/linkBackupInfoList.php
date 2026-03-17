<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayHaResponseBody\linkBackupInfoList;

use AlibabaCloud\Dara\Model;

class linkBackupInfoList extends Model
{
    /**
     * @var string
     */
    public $backupLinkId;

    /**
     * @var string
     */
    public $backupLinkState;

    /**
     * @var string
     */
    public $linkLevelBackupState;

    /**
     * @var string
     */
    public $linkLevelBackupType;

    /**
     * @var string
     */
    public $mainLinkId;

    /**
     * @var string
     */
    public $mainLinkState;
    protected $_name = [
        'backupLinkId' => 'BackupLinkId',
        'backupLinkState' => 'BackupLinkState',
        'linkLevelBackupState' => 'LinkLevelBackupState',
        'linkLevelBackupType' => 'LinkLevelBackupType',
        'mainLinkId' => 'MainLinkId',
        'mainLinkState' => 'MainLinkState',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupLinkId) {
            $res['BackupLinkId'] = $this->backupLinkId;
        }

        if (null !== $this->backupLinkState) {
            $res['BackupLinkState'] = $this->backupLinkState;
        }

        if (null !== $this->linkLevelBackupState) {
            $res['LinkLevelBackupState'] = $this->linkLevelBackupState;
        }

        if (null !== $this->linkLevelBackupType) {
            $res['LinkLevelBackupType'] = $this->linkLevelBackupType;
        }

        if (null !== $this->mainLinkId) {
            $res['MainLinkId'] = $this->mainLinkId;
        }

        if (null !== $this->mainLinkState) {
            $res['MainLinkState'] = $this->mainLinkState;
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
        if (isset($map['BackupLinkId'])) {
            $model->backupLinkId = $map['BackupLinkId'];
        }

        if (isset($map['BackupLinkState'])) {
            $model->backupLinkState = $map['BackupLinkState'];
        }

        if (isset($map['LinkLevelBackupState'])) {
            $model->linkLevelBackupState = $map['LinkLevelBackupState'];
        }

        if (isset($map['LinkLevelBackupType'])) {
            $model->linkLevelBackupType = $map['LinkLevelBackupType'];
        }

        if (isset($map['MainLinkId'])) {
            $model->mainLinkId = $map['MainLinkId'];
        }

        if (isset($map['MainLinkState'])) {
            $model->mainLinkState = $map['MainLinkState'];
        }

        return $model;
    }
}
