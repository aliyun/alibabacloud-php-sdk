<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeGatherLogResultResponseBody\gatherLogResult\instanceResults;

use AlibabaCloud\Tea\Model;

class instanceResult extends Model
{
    /**
     * @var string
     */
    public $taskMessage;

    /**
     * @var string
     */
    public $storageKey;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $taskSucceeded;
    protected $_name = [
        'taskMessage'   => 'TaskMessage',
        'storageKey'    => 'StorageKey',
        'instanceId'    => 'InstanceId',
        'taskSucceeded' => 'TaskSucceeded',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskMessage) {
            $res['TaskMessage'] = $this->taskMessage;
        }
        if (null !== $this->storageKey) {
            $res['StorageKey'] = $this->storageKey;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->taskSucceeded) {
            $res['TaskSucceeded'] = $this->taskSucceeded;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskMessage'])) {
            $model->taskMessage = $map['TaskMessage'];
        }
        if (isset($map['StorageKey'])) {
            $model->storageKey = $map['StorageKey'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TaskSucceeded'])) {
            $model->taskSucceeded = $map['TaskSucceeded'];
        }

        return $model;
    }
}
