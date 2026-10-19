<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetNodeDetailResponseBody\agentWorkProcess;

use AlibabaCloud\Dara\Model;

class toolCalls extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'action' => 'action',
        'detail' => 'detail',
        'duration' => 'duration',
        'nodeId' => 'nodeId',
        'timestamp' => 'timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->detail) {
            $res['detail'] = $this->detail;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->nodeId) {
            $res['nodeId'] = $this->nodeId;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['detail'])) {
            $model->detail = $map['detail'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['nodeId'])) {
            $model->nodeId = $map['nodeId'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        return $model;
    }
}
