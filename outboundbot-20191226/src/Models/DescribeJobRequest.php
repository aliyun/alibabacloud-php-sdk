<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class DescribeJobRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var bool
     */
    public $withScript;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'jobId' => 'JobId',
        'withScript' => 'WithScript',
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

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->withScript) {
            $res['WithScript'] = $this->withScript;
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
            $model->jobId = $map['JobId'];
        }

        if (isset($map['WithScript'])) {
            $model->withScript = $map['WithScript'];
        }

        return $model;
    }
}
