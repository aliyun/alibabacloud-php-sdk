<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appflow\V20230904\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appflow\V20230904\Models\GetFlowResponseBody\flow;

class GetFlowResponseBody extends Model
{
    /**
     * @var flow
     */
    public $flow;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'flow' => 'Flow',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->flow) {
            $this->flow->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flow) {
            $res['Flow'] = null !== $this->flow ? $this->flow->toArray($noStream) : $this->flow;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Flow'])) {
            $model->flow = flow::fromMap($map['Flow']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
