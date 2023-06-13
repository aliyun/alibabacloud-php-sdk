<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\ipAllocationPolicy;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\newVpdInfo;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks\vpdInfo;
use AlibabaCloud\Tea\Model;

class networks extends Model
{
    /**
     * @var ipAllocationPolicy[]
     */
    public $ipAllocationPolicy;

    /**
     * @var newVpdInfo
     */
    public $newVpdInfo;

    /**
     * @description 复用VPD信息
     *
     * @var vpdInfo
     */
    public $vpdInfo;
    protected $_name = [
        'ipAllocationPolicy' => 'IpAllocationPolicy',
        'newVpdInfo'         => 'NewVpdInfo',
        'vpdInfo'            => 'VpdInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipAllocationPolicy) {
            $res['IpAllocationPolicy'] = [];
            if (null !== $this->ipAllocationPolicy && \is_array($this->ipAllocationPolicy)) {
                $n = 0;
                foreach ($this->ipAllocationPolicy as $item) {
                    $res['IpAllocationPolicy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->newVpdInfo) {
            $res['NewVpdInfo'] = null !== $this->newVpdInfo ? $this->newVpdInfo->toMap() : null;
        }
        if (null !== $this->vpdInfo) {
            $res['VpdInfo'] = null !== $this->vpdInfo ? $this->vpdInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpAllocationPolicy'])) {
            if (!empty($map['IpAllocationPolicy'])) {
                $model->ipAllocationPolicy = [];
                $n                         = 0;
                foreach ($map['IpAllocationPolicy'] as $item) {
                    $model->ipAllocationPolicy[$n++] = null !== $item ? ipAllocationPolicy::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NewVpdInfo'])) {
            $model->newVpdInfo = newVpdInfo::fromMap($map['NewVpdInfo']);
        }
        if (isset($map['VpdInfo'])) {
            $model->vpdInfo = vpdInfo::fromMap($map['VpdInfo']);
        }

        return $model;
    }
}
