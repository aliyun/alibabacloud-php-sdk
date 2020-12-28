<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTopologyResponseBody\topologys;
use AlibabaCloud\Tea\Model;

class DescribeInstanceTopologyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var topologys[]
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
            $res['Topologys'] = [];
            if (null !== $this->topologys && \is_array($this->topologys)) {
                $n = 0;
                foreach ($this->topologys as $item) {
                    $res['Topologys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['Topologys'])) {
                $model->topologys = [];
                $n                = 0;
                foreach ($map['Topologys'] as $item) {
                    $model->topologys[$n++] = null !== $item ? topologys::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
