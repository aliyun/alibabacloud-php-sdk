<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;

class GetBatchTaskRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $batchTaskId;

    /**
     * @example 123
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 123
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'batchTaskId' => 'BatchTaskId',
        'clientToken' => 'ClientToken',
        'instanceId'  => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchTaskId) {
            $res['BatchTaskId'] = $this->batchTaskId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBatchTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchTaskId'])) {
            $model->batchTaskId = $map['BatchTaskId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
