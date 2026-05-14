<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkAgentStatusDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkAgentStatusDetailResponseBody\data\agentStatusDetail;

class data extends Model
{
    /**
     * @var agentStatusDetail
     */
    public $agentStatusDetail;

    /**
     * @var string
     */
    public $clinkRequestId;
    protected $_name = [
        'agentStatusDetail' => 'AgentStatusDetail',
        'clinkRequestId' => 'ClinkRequestId',
    ];

    public function validate()
    {
        if (null !== $this->agentStatusDetail) {
            $this->agentStatusDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentStatusDetail) {
            $res['AgentStatusDetail'] = null !== $this->agentStatusDetail ? $this->agentStatusDetail->toArray($noStream) : $this->agentStatusDetail;
        }

        if (null !== $this->clinkRequestId) {
            $res['ClinkRequestId'] = $this->clinkRequestId;
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
        if (isset($map['AgentStatusDetail'])) {
            $model->agentStatusDetail = agentStatusDetail::fromMap($map['AgentStatusDetail']);
        }

        if (isset($map['ClinkRequestId'])) {
            $model->clinkRequestId = $map['ClinkRequestId'];
        }

        return $model;
    }
}
