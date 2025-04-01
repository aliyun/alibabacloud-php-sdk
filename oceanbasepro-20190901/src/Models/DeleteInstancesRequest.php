<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class DeleteInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $backupRetainMode;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $instanceIds;
    protected $_name = [
        'backupRetainMode' => 'BackupRetainMode',
        'dryRun' => 'DryRun',
        'instanceIds' => 'InstanceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupRetainMode) {
            $res['BackupRetainMode'] = $this->backupRetainMode;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
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
        if (isset($map['BackupRetainMode'])) {
            $model->backupRetainMode = $map['BackupRetainMode'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        return $model;
    }
}
