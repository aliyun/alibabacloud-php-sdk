<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class SyncInstanceMetaRequest extends Model
{
    /**
     * @description Specifies whether to skip synchronization for the metadata of table dictionaries. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $ignoreTable;

    /**
     * @description The ID of the instance.
     *
     * @example 12***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the tenant.
     *
     * > To view the ID of the tenant, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see the [View information about the current tenant](~~181330~~) section of the Manage DMS tenants topic.
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'ignoreTable' => 'IgnoreTable',
        'instanceId'  => 'InstanceId',
        'tid'         => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ignoreTable) {
            $res['IgnoreTable'] = $this->ignoreTable;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncInstanceMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IgnoreTable'])) {
            $model->ignoreTable = $map['IgnoreTable'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
