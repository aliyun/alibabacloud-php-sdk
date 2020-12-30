<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayHaResponseBody\linkBackupInfoList;
use AlibabaCloud\Tea\Model;

class DescribeSmartAccessGatewayHaResponseBody extends Model
{
    /**
     * @var string
     */
    public $deviceLevelBackupState;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $backupDeviceId;

    /**
     * @var linkBackupInfoList
     */
    public $linkBackupInfoList;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var string
     */
    public $deviceLevelBackupType;

    /**
     * @var string
     */
    public $mainDeviceId;
    protected $_name = [
        'deviceLevelBackupState' => 'DeviceLevelBackupState',
        'requestId'              => 'RequestId',
        'backupDeviceId'         => 'BackupDeviceId',
        'linkBackupInfoList'     => 'LinkBackupInfoList',
        'smartAGId'              => 'SmartAGId',
        'deviceLevelBackupType'  => 'DeviceLevelBackupType',
        'mainDeviceId'           => 'MainDeviceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceLevelBackupState) {
            $res['DeviceLevelBackupState'] = $this->deviceLevelBackupState;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->backupDeviceId) {
            $res['BackupDeviceId'] = $this->backupDeviceId;
        }
        if (null !== $this->linkBackupInfoList) {
            $res['LinkBackupInfoList'] = null !== $this->linkBackupInfoList ? $this->linkBackupInfoList->toMap() : null;
        }
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->deviceLevelBackupType) {
            $res['DeviceLevelBackupType'] = $this->deviceLevelBackupType;
        }
        if (null !== $this->mainDeviceId) {
            $res['MainDeviceId'] = $this->mainDeviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSmartAccessGatewayHaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceLevelBackupState'])) {
            $model->deviceLevelBackupState = $map['DeviceLevelBackupState'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BackupDeviceId'])) {
            $model->backupDeviceId = $map['BackupDeviceId'];
        }
        if (isset($map['LinkBackupInfoList'])) {
            $model->linkBackupInfoList = linkBackupInfoList::fromMap($map['LinkBackupInfoList']);
        }
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['DeviceLevelBackupType'])) {
            $model->deviceLevelBackupType = $map['DeviceLevelBackupType'];
        }
        if (isset($map['MainDeviceId'])) {
            $model->mainDeviceId = $map['MainDeviceId'];
        }

        return $model;
    }
}
