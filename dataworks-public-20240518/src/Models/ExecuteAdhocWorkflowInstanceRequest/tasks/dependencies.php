<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest\tasks;

use AlibabaCloud\Dara\Model;

class dependencies extends Model
{
    /**
     * @var string
     */
    public $upstreamOutput;
    protected $_name = [
        'upstreamOutput' => 'UpstreamOutput',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->upstreamOutput) {
            $res['UpstreamOutput'] = $this->upstreamOutput;
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
        if (isset($map['UpstreamOutput'])) {
            $model->upstreamOutput = $map['UpstreamOutput'];
        }

        return $model;
    }
}
