<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateBackupSetDownloadLinkRequest extends Model
{
    /**
     * @example bak-6f****
     *
     * @var string
     */
    public $backupSetId;

    /**
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'backupSetId' => 'BackupSetId',
        'instanceId'  => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBackupSetDownloadLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
