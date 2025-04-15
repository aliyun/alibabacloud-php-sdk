<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class InsertAiOutboundPhoneNumsShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $batchVersion;

    /**
     * @var string
     */
    public $detailsShrink;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'batchVersion' => 'BatchVersion',
        'detailsShrink' => 'Details',
        'instanceId' => 'InstanceId',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
