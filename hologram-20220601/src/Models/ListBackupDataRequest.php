<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Tea\Model;

class ListBackupDataRequest extends Model
{
    /**
     * @description The backup type. Specific backup data is filtered based on the type. If you leave this parameter empty, all backup data is returned.
     *
     * Valid values:
     *
     *   redundant_remote
     *   remote
     *   redundant
     *   full_remote
     *   local
     *   full
     *
     * @example redundant
     *
     * @var string
     */
    public $backupType;

    /**
     * @description The instance ID.
     *
     * @example hgprecn-cn-wwoxxxxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'backupType' => 'backupType',
        'instanceId' => 'instanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupType) {
            $res['backupType'] = $this->backupType;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBackupDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['backupType'])) {
            $model->backupType = $map['backupType'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        return $model;
    }
}
