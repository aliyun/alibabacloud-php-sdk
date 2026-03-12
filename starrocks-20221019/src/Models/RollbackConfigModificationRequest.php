<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class RollbackConfigModificationRequest extends Model
{
    /**
     * @var int
     */
    public $configHistoryId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $restart;
    protected $_name = [
        'configHistoryId' => 'ConfigHistoryId',
        'instanceId' => 'InstanceId',
        'restart' => 'Restart',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configHistoryId) {
            $res['ConfigHistoryId'] = $this->configHistoryId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->restart) {
            $res['Restart'] = $this->restart;
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
        if (isset($map['ConfigHistoryId'])) {
            $model->configHistoryId = $map['ConfigHistoryId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Restart'])) {
            $model->restart = $map['Restart'];
        }

        return $model;
    }
}
