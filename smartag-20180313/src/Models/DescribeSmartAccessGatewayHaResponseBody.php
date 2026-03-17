<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayHaResponseBody\linkBackupInfoList;

class DescribeSmartAccessGatewayHaResponseBody extends Model
{
    /**
     * @var string
     */
    public $backupDeviceId;

    /**
     * @var string
     */
    public $deviceLevelBackupState;

    /**
     * @var string
     */
    public $deviceLevelBackupType;

    /**
     * @var linkBackupInfoList
     */
    public $linkBackupInfoList;

    /**
     * @var string
     */
    public $mainDeviceId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $smartAGId;
    protected $_name = [
        'backupDeviceId' => 'BackupDeviceId',
        'deviceLevelBackupState' => 'DeviceLevelBackupState',
        'deviceLevelBackupType' => 'DeviceLevelBackupType',
        'linkBackupInfoList' => 'LinkBackupInfoList',
        'mainDeviceId' => 'MainDeviceId',
        'requestId' => 'RequestId',
        'smartAGId' => 'SmartAGId',
    ];

    public function validate()
    {
        if (null !== $this->linkBackupInfoList) {
            $this->linkBackupInfoList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupDeviceId) {
            $res['BackupDeviceId'] = $this->backupDeviceId;
        }

        if (null !== $this->deviceLevelBackupState) {
            $res['DeviceLevelBackupState'] = $this->deviceLevelBackupState;
        }

        if (null !== $this->deviceLevelBackupType) {
            $res['DeviceLevelBackupType'] = $this->deviceLevelBackupType;
        }

        if (null !== $this->linkBackupInfoList) {
            $res['LinkBackupInfoList'] = null !== $this->linkBackupInfoList ? $this->linkBackupInfoList->toArray($noStream) : $this->linkBackupInfoList;
        }

        if (null !== $this->mainDeviceId) {
            $res['MainDeviceId'] = $this->mainDeviceId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
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
        if (isset($map['BackupDeviceId'])) {
            $model->backupDeviceId = $map['BackupDeviceId'];
        }

        if (isset($map['DeviceLevelBackupState'])) {
            $model->deviceLevelBackupState = $map['DeviceLevelBackupState'];
        }

        if (isset($map['DeviceLevelBackupType'])) {
            $model->deviceLevelBackupType = $map['DeviceLevelBackupType'];
        }

        if (isset($map['LinkBackupInfoList'])) {
            $model->linkBackupInfoList = linkBackupInfoList::fromMap($map['LinkBackupInfoList']);
        }

        if (isset($map['MainDeviceId'])) {
            $model->mainDeviceId = $map['MainDeviceId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }

        return $model;
    }
}
