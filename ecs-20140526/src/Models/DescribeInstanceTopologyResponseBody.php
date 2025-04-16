<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTopologyResponseBody\topologys;

class DescribeInstanceTopologyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var topologys
     */
    public $topologys;
    protected $_name = [
        'requestId' => 'RequestId',
        'topologys' => 'Topologys',
    ];

    public function validate()
    {
        if (null !== $this->topologys) {
            $this->topologys->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->topologys) {
            $res['Topologys'] = null !== $this->topologys ? $this->topologys->toArray($noStream) : $this->topologys;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Topologys'])) {
            $model->topologys = topologys::fromMap($map['Topologys']);
        }

        return $model;
    }
}
