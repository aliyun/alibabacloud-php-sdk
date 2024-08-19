<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRestorableTenantsResponseBody\tenants;

use AlibabaCloud\Tea\Model;

class backupSets extends Model
{
    /**
     * @example bak-4n****gacpa8
     *
     * @var string
     */
    public $backupSetId;

    /**
     * @example 2024-01-01\\"T\\"12:10:10.000\\"Z\\"
     *
     * @var string
     */
    public $checkpoint;

    /**
     * @example bak-xxxxx
     *
     * @var string
     */
    public $setId;

    /**
     * @example t5********
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'backupSetId' => 'BackupSetId',
        'checkpoint'  => 'Checkpoint',
        'setId'       => 'SetId',
        'tenantId'    => 'TenantId',
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
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
