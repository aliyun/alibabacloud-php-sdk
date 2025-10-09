<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateWorkflowRequest\tasks;

use AlibabaCloud\Dara\Model;

class dependencies extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $upstreamOutput;

    /**
     * @var int
     */
    public $upstreamTaskId;
    protected $_name = [
        'type' => 'Type',
        'upstreamOutput' => 'UpstreamOutput',
        'upstreamTaskId' => 'UpstreamTaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->upstreamOutput) {
            $res['UpstreamOutput'] = $this->upstreamOutput;
        }

        if (null !== $this->upstreamTaskId) {
            $res['UpstreamTaskId'] = $this->upstreamTaskId;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UpstreamOutput'])) {
            $model->upstreamOutput = $map['UpstreamOutput'];
        }

        if (isset($map['UpstreamTaskId'])) {
            $model->upstreamTaskId = $map['UpstreamTaskId'];
        }

        return $model;
    }
}
