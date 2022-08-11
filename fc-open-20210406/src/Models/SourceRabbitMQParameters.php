<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class SourceRabbitMQParameters extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $virtualHostName;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'queueName'       => 'QueueName',
        'regionId'        => 'RegionId',
        'virtualHostName' => 'VirtualHostName',
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
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->virtualHostName) {
            $res['VirtualHostName'] = $this->virtualHostName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SourceRabbitMQParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VirtualHostName'])) {
            $model->virtualHostName = $map['VirtualHostName'];
        }

        return $model;
    }
}
