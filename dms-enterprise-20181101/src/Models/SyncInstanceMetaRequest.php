<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

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
     * @var int
     */
    public $tid;
    protected $_name = [
        'ignoreTable' => 'IgnoreTable',
        'instanceId' => 'InstanceId',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
