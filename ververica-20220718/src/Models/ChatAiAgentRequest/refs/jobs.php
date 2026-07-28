<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\ChatAiAgentRequest\refs;

use AlibabaCloud\Dara\Model;

class jobs extends Model
{
    /**
     * @var string
     */
    public $deploymentId;

    /**
     * @var string
     */
    public $jobId;
    protected $_name = [
        'deploymentId' => 'deploymentId',
        'jobId' => 'jobId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }

        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
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
        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }

        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }

        return $model;
    }
}
