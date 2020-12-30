<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class SyncInstanceMetaRequest extends Model
{
    /**
     * @var int
     */
    public $tid;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $ignoreTable;
    protected $_name = [
        'tid'         => 'Tid',
        'instanceId'  => 'InstanceId',
        'ignoreTable' => 'IgnoreTable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ignoreTable) {
            $res['IgnoreTable'] = $this->ignoreTable;
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
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IgnoreTable'])) {
            $model->ignoreTable = $map['IgnoreTable'];
        }

        return $model;
    }
}
