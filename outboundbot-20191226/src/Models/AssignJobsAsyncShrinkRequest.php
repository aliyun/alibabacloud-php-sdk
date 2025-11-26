<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class AssignJobsAsyncShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $callingNumberShrink;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $jobsJsonShrink;

    /**
     * @var string
     */
    public $strategyJson;
    protected $_name = [
        'callingNumberShrink' => 'CallingNumber',
        'instanceId' => 'InstanceId',
        'jobGroupId' => 'JobGroupId',
        'jobsJsonShrink' => 'JobsJson',
        'strategyJson' => 'StrategyJson',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callingNumberShrink) {
            $res['CallingNumber'] = $this->callingNumberShrink;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }

        if (null !== $this->jobsJsonShrink) {
            $res['JobsJson'] = $this->jobsJsonShrink;
        }

        if (null !== $this->strategyJson) {
            $res['StrategyJson'] = $this->strategyJson;
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
        if (isset($map['CallingNumber'])) {
            $model->callingNumberShrink = $map['CallingNumber'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }

        if (isset($map['JobsJson'])) {
            $model->jobsJsonShrink = $map['JobsJson'];
        }

        if (isset($map['StrategyJson'])) {
            $model->strategyJson = $map['StrategyJson'];
        }

        return $model;
    }
}
