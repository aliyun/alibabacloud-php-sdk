<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\PollUserStatusResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\PollUserStatusResponseBody\data\chatContexts\members;
use AlibabaCloud\Tea\Model;

class chatContexts extends Model
{
    /**
     * @var string
     */
    public $callVariables;

    /**
     * @var string
     */
    public $chatType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var members[]
     */
    public $members;
    protected $_name = [
        'callVariables' => 'CallVariables',
        'chatType'      => 'ChatType',
        'instanceId'    => 'InstanceId',
        'jobId'         => 'JobId',
        'members'       => 'Members',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callVariables) {
            $res['CallVariables'] = $this->callVariables;
        }
        if (null !== $this->chatType) {
            $res['ChatType'] = $this->chatType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->members) {
            $res['Members'] = [];
            if (null !== $this->members && \is_array($this->members)) {
                $n = 0;
                foreach ($this->members as $item) {
                    $res['Members'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chatContexts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallVariables'])) {
            $model->callVariables = $map['CallVariables'];
        }
        if (isset($map['ChatType'])) {
            $model->chatType = $map['ChatType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Members'])) {
            if (!empty($map['Members'])) {
                $model->members = [];
                $n              = 0;
                foreach ($map['Members'] as $item) {
                    $model->members[$n++] = null !== $item ? members::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
