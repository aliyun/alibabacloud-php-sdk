<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstancesRequest extends Model
{
    /**
     * @description The backup retention strategy for cluster deletion. Valid values:
     * > <br>Default value: delete_all.
     * @example delete_all
     *
     * @var string
     */
    public $backupRetainMode;

    /**
     * @description The ID of the cluster to be deleted.
     * The value is a string in the JSON format.
     * @example [”ob ob3f6yhv9uxxxx“]
     *
     * @var string
     */
    public $instanceIds;
    protected $_name = [
        'backupRetainMode' => 'BackupRetainMode',
        'instanceIds'      => 'InstanceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupRetainMode) {
            $res['BackupRetainMode'] = $this->backupRetainMode;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupRetainMode'])) {
            $model->backupRetainMode = $map['BackupRetainMode'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        return $model;
    }
}
