<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class ModifyPartitionNumRequest extends Model
{
    /**
     * @var int
     */
    public $addPartitionNum;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'addPartitionNum' => 'AddPartitionNum',
        'instanceId'      => 'InstanceId',
        'regionId'        => 'RegionId',
        'topic'           => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addPartitionNum) {
            $res['AddPartitionNum'] = $this->addPartitionNum;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPartitionNumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddPartitionNum'])) {
            $model->addPartitionNum = $map['AddPartitionNum'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
