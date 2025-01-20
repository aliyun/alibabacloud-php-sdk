<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\PollUserStatusResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\PollUserStatusResponseBody\data\chatContexts\members;

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
        if (\is_array($this->members)) {
            Model::validateArray($this->members);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->members)) {
                $res['Members'] = [];
                $n1             = 0;
                foreach ($this->members as $item1) {
                    $res['Members'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1             = 0;
                foreach ($map['Members'] as $item1) {
                    $model->members[$n1++] = members::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
