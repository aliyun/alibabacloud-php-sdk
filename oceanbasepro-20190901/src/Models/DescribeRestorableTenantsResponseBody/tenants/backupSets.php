<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeRestorableTenantsResponseBody\tenants;

use AlibabaCloud\Dara\Model;

class backupSets extends Model
{
    /**
     * @var string
     */
    public $backupSetId;

    /**
     * @var string
     */
    public $checkpoint;

    /**
     * @var string
     */
    public $setId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'backupSetId' => 'BackupSetId',
        'checkpoint' => 'Checkpoint',
        'setId' => 'SetId',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
