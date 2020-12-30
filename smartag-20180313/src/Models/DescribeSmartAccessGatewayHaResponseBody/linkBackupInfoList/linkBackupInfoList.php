<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayHaResponseBody\linkBackupInfoList;

use AlibabaCloud\Tea\Model;

class linkBackupInfoList extends Model
{
    /**
     * @var string
     */
    public $mainLinkId;

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
    public $backupLinkId;

    /**
     * @var string
     */
    public $mainLinkState;

    /**
     * @var string
     */
    public $linkLevelBackupType;
    protected $_name = [
        'mainLinkId'           => 'MainLinkId',
        'backupLinkState'      => 'BackupLinkState',
        'linkLevelBackupState' => 'LinkLevelBackupState',
        'backupLinkId'         => 'BackupLinkId',
        'mainLinkState'        => 'MainLinkState',
        'linkLevelBackupType'  => 'LinkLevelBackupType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mainLinkId) {
            $res['MainLinkId'] = $this->mainLinkId;
        }
        if (null !== $this->backupLinkState) {
            $res['BackupLinkState'] = $this->backupLinkState;
        }
        if (null !== $this->linkLevelBackupState) {
            $res['LinkLevelBackupState'] = $this->linkLevelBackupState;
        }
        if (null !== $this->backupLinkId) {
            $res['BackupLinkId'] = $this->backupLinkId;
        }
        if (null !== $this->mainLinkState) {
            $res['MainLinkState'] = $this->mainLinkState;
        }
        if (null !== $this->linkLevelBackupType) {
            $res['LinkLevelBackupType'] = $this->linkLevelBackupType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return linkBackupInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MainLinkId'])) {
            $model->mainLinkId = $map['MainLinkId'];
        }
        if (isset($map['BackupLinkState'])) {
            $model->backupLinkState = $map['BackupLinkState'];
        }
        if (isset($map['LinkLevelBackupState'])) {
            $model->linkLevelBackupState = $map['LinkLevelBackupState'];
        }
        if (isset($map['BackupLinkId'])) {
            $model->backupLinkId = $map['BackupLinkId'];
        }
        if (isset($map['MainLinkState'])) {
            $model->mainLinkState = $map['MainLinkState'];
        }
        if (isset($map['LinkLevelBackupType'])) {
            $model->linkLevelBackupType = $map['LinkLevelBackupType'];
        }

        return $model;
    }
}
