<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\networkInfo\endpoints;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\networkInfo\internetInfo;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\networkInfo\vpcInfo;

class networkInfo extends Model
{
    /**
     * @var endpoints[]
     */
    public $endpoints;

    /**
     * @var internetInfo
     */
    public $internetInfo;

    /**
     * @var vpcInfo
     */
    public $vpcInfo;
    protected $_name = [
        'endpoints' => 'endpoints',
        'internetInfo' => 'internetInfo',
        'vpcInfo' => 'vpcInfo',
    ];

    public function validate()
    {
        if (\is_array($this->endpoints)) {
            Model::validateArray($this->endpoints);
        }
        if (null !== $this->internetInfo) {
            $this->internetInfo->validate();
        }
        if (null !== $this->vpcInfo) {
            $this->vpcInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpoints) {
            if (\is_array($this->endpoints)) {
                $res['endpoints'] = [];
                $n1 = 0;
                foreach ($this->endpoints as $item1) {
                    $res['endpoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->internetInfo) {
            $res['internetInfo'] = null !== $this->internetInfo ? $this->internetInfo->toArray($noStream) : $this->internetInfo;
        }

        if (null !== $this->vpcInfo) {
            $res['vpcInfo'] = null !== $this->vpcInfo ? $this->vpcInfo->toArray($noStream) : $this->vpcInfo;
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
        if (isset($map['endpoints'])) {
            if (!empty($map['endpoints'])) {
                $model->endpoints = [];
                $n1 = 0;
                foreach ($map['endpoints'] as $item1) {
                    $model->endpoints[$n1] = endpoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['internetInfo'])) {
            $model->internetInfo = internetInfo::fromMap($map['internetInfo']);
        }

        if (isset($map['vpcInfo'])) {
            $model->vpcInfo = vpcInfo::fromMap($map['vpcInfo']);
        }

        return $model;
    }
}
