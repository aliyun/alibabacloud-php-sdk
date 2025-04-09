<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class ListJobsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $jobId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'jobId' => 'JobId',
    ];

    public function validate()
    {
        if (\is_array($this->jobId)) {
            Model::validateArray($this->jobId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobId) {
            if (\is_array($this->jobId)) {
                $res['JobId'] = [];
                $n1 = 0;
                foreach ($this->jobId as $item1) {
                    $res['JobId'][$n1++] = $item1;
                }
            }
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

        if (isset($map['JobId'])) {
            if (!empty($map['JobId'])) {
                $model->jobId = [];
                $n1 = 0;
                foreach ($map['JobId'] as $item1) {
                    $model->jobId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
