<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceSpecInfoResponseBody\instanceSpecInfos;
use AlibabaCloud\Tea\Model;

class DescribeInstanceSpecInfoResponseBody extends Model
{
    /**
     * @var instanceSpecInfos[]
     */
    public $instanceSpecInfos;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $version;

    /**
     * @var int
     */
    public $expireTime;
    protected $_name = [
        'instanceSpecInfos' => 'InstanceSpecInfos',
        'requestId'         => 'RequestId',
        'instanceId'        => 'InstanceId',
        'version'           => 'Version',
        'expireTime'        => 'ExpireTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceSpecInfos) {
            $res['InstanceSpecInfos'] = [];
            if (null !== $this->instanceSpecInfos && \is_array($this->instanceSpecInfos)) {
                $n = 0;
                foreach ($this->instanceSpecInfos as $item) {
                    $res['InstanceSpecInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceSpecInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceSpecInfos'])) {
            if (!empty($map['InstanceSpecInfos'])) {
                $model->instanceSpecInfos = [];
                $n                        = 0;
                foreach ($map['InstanceSpecInfos'] as $item) {
                    $model->instanceSpecInfos[$n++] = null !== $item ? instanceSpecInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        return $model;
    }
}
