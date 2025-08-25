<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\RedialCallResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\RedialCallResponseBody\data\callContext\channelContexts;

class callContext extends Model
{
    /**
     * @var string
     */
    public $callType;

    /**
     * @var channelContexts[]
     */
    public $channelContexts;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobId;
    protected $_name = [
        'callType' => 'CallType',
        'channelContexts' => 'ChannelContexts',
        'instanceId' => 'InstanceId',
        'jobId' => 'JobId',
    ];

    public function validate()
    {
        if (\is_array($this->channelContexts)) {
            Model::validateArray($this->channelContexts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }

        if (null !== $this->channelContexts) {
            if (\is_array($this->channelContexts)) {
                $res['ChannelContexts'] = [];
                $n1 = 0;
                foreach ($this->channelContexts as $item1) {
                    $res['ChannelContexts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }

        if (isset($map['ChannelContexts'])) {
            if (!empty($map['ChannelContexts'])) {
                $model->channelContexts = [];
                $n1 = 0;
                foreach ($map['ChannelContexts'] as $item1) {
                    $model->channelContexts[$n1] = channelContexts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
