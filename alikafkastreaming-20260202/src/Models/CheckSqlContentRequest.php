<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models;

use AlibabaCloud\Dara\Model;

class CheckSqlContentRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sqlContent;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'jobName' => 'JobName',
        'regionId' => 'RegionId',
        'sqlContent' => 'SqlContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sqlContent) {
            $res['SqlContent'] = $this->sqlContent;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SqlContent'])) {
            $model->sqlContent = $map['SqlContent'];
        }

        return $model;
    }
}
