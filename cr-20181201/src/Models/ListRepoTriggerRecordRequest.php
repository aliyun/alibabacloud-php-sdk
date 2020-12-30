<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class ListRepoTriggerRecordRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $triggerRecordId;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'triggerRecordId' => 'TriggerRecordId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->triggerRecordId) {
            $res['TriggerRecordId'] = $this->triggerRecordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRepoTriggerRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TriggerRecordId'])) {
            $model->triggerRecordId = $map['TriggerRecordId'];
        }

        return $model;
    }
}
