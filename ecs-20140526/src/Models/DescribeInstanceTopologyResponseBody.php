<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTopologyResponseBody\topologys;
use AlibabaCloud\Tea\Model;

class DescribeInstanceTopologyResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Details about the topology.
     *
     * @var topologys
     */
    public $topologys;
    protected $_name = [
        'requestId' => 'RequestId',
        'topologys' => 'Topologys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->topologys) {
            $res['Topologys'] = null !== $this->topologys ? $this->topologys->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceTopologyResponseBody
     */
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
