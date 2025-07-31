<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class UpdateBackupConfigRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $backupConfig;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example video
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example videoDetection
     *
     * @var string
     */
    public $serviceCode;
    protected $_name = [
        'backupConfig' => 'BackupConfig',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'serviceCode' => 'ServiceCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupConfig) {
            $res['BackupConfig'] = $this->backupConfig;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBackupConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupConfig'])) {
            $model->backupConfig = $map['BackupConfig'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        return $model;
    }
}
