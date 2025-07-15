<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\MakeCallResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\MakeCallResponseBody\data\callContext\channelContexts;
use AlibabaCloud\Tea\Model;

class callContext extends Model
{
    /**
     * @example OUTBOUND
     *
     * @var string
     */
    public $callType;

    /**
     * @var string
     */
    public $callVariables;

    /**
     * @var channelContexts[]
     */
    public $channelContexts;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example job-6570007401392****
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'callType' => 'CallType',
        'callVariables' => 'CallVariables',
        'channelContexts' => 'ChannelContexts',
        'instanceId' => 'InstanceId',
        'jobId' => 'JobId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->callVariables) {
            $res['CallVariables'] = $this->callVariables;
        }
        if (null !== $this->channelContexts) {
            $res['ChannelContexts'] = [];
            if (null !== $this->channelContexts && \is_array($this->channelContexts)) {
                $n = 0;
                foreach ($this->channelContexts as $item) {
                    $res['ChannelContexts'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return callContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['CallVariables'])) {
            $model->callVariables = $map['CallVariables'];
        }
        if (isset($map['ChannelContexts'])) {
            if (!empty($map['ChannelContexts'])) {
                $model->channelContexts = [];
                $n = 0;
                foreach ($map['ChannelContexts'] as $item) {
                    $model->channelContexts[$n++] = null !== $item ? channelContexts::fromMap($item) : $item;
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
