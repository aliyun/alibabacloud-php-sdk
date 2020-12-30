<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceInfosResponseBody\instanceInfos;
use AlibabaCloud\Tea\Model;

class DescribeInstanceInfosResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceInfos[]
     */
    public $instanceInfos;
    protected $_name = [
        'requestId'     => 'RequestId',
        'instanceInfos' => 'InstanceInfos',
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
        if (null !== $this->instanceInfos) {
            $res['InstanceInfos'] = [];
            if (null !== $this->instanceInfos && \is_array($this->instanceInfos)) {
                $n = 0;
                foreach ($this->instanceInfos as $item) {
                    $res['InstanceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceInfos'])) {
            if (!empty($map['InstanceInfos'])) {
                $model->instanceInfos = [];
                $n                    = 0;
                foreach ($map['InstanceInfos'] as $item) {
                    $model->instanceInfos[$n++] = null !== $item ? instanceInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
