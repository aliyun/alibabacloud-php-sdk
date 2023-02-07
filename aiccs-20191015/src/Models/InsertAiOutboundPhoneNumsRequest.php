<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\InsertAiOutboundPhoneNumsRequest\details;
use AlibabaCloud\Tea\Model;

class InsertAiOutboundPhoneNumsRequest extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $batchVersion;

    /**
     * @var details[]
     */
    public $details;

    /**
     * @example agent_***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 123
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'batchVersion' => 'BatchVersion',
        'details'      => 'Details',
        'instanceId'   => 'InstanceId',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchVersion) {
            $res['BatchVersion'] = $this->batchVersion;
        }
        if (null !== $this->details) {
            $res['Details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['Details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertAiOutboundPhoneNumsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchVersion'])) {
            $model->batchVersion = $map['BatchVersion'];
        }
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n              = 0;
                foreach ($map['Details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
