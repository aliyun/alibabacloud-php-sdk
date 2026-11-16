<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeInstanceSpecInfoResponseBody\instanceSpecInfos;

class DescribeInstanceSpecInfoResponseBody extends Model
{
    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

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
    public $version;
    protected $_name = [
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'instanceSpecInfos' => 'InstanceSpecInfos',
        'requestId' => 'RequestId',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->instanceSpecInfos)) {
            Model::validateArray($this->instanceSpecInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceSpecInfos) {
            if (\is_array($this->instanceSpecInfos)) {
                $res['InstanceSpecInfos'] = [];
                $n1 = 0;
                foreach ($this->instanceSpecInfos as $item1) {
                    $res['InstanceSpecInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceSpecInfos'])) {
            if (!empty($map['InstanceSpecInfos'])) {
                $model->instanceSpecInfos = [];
                $n1 = 0;
                foreach ($map['InstanceSpecInfos'] as $item1) {
                    $model->instanceSpecInfos[$n1] = instanceSpecInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
