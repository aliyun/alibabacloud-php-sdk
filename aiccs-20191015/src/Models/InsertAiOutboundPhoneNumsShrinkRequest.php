<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class InsertAiOutboundPhoneNumsShrinkRequest extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $batchVersion;

    /**
     * @var string
     */
    public $detailsShrink;

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
        'batchVersion'  => 'BatchVersion',
        'detailsShrink' => 'Details',
        'instanceId'    => 'InstanceId',
        'taskId'        => 'TaskId',
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
        if (null !== $this->detailsShrink) {
            $res['Details'] = $this->detailsShrink;
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
     * @return InsertAiOutboundPhoneNumsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchVersion'])) {
            $model->batchVersion = $map['BatchVersion'];
        }
        if (isset($map['Details'])) {
            $model->detailsShrink = $map['Details'];
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
