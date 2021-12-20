<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class SyncInstanceMetaRequest extends Model
{
    /**
     * @var bool
     */
    public $ignoreTable;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'ignoreTable' => 'IgnoreTable',
        'instanceId'  => 'InstanceId',
        'regionId'    => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
