<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeClusterDevicesResponseBody\devices;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeClusterDevicesResponseBody\devices\podInfos\network;
use AlibabaCloud\Tea\Model;

class podInfos extends Model
{
    /**
     * @var network[]
     */
    public $network;

    /**
     * @var string
     */
    public $podId;

    /**
     * @var string
     */
    public $podIp;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'network' => 'Network',
        'podId'   => 'PodId',
        'podIp'   => 'PodIp',
        'status'  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->network) {
            $res['Network'] = [];
            if (null !== $this->network && \is_array($this->network)) {
                $n = 0;
                foreach ($this->network as $item) {
                    $res['Network'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->podId) {
            $res['PodId'] = $this->podId;
        }
        if (null !== $this->podIp) {
            $res['PodIp'] = $this->podIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return podInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Network'])) {
            if (!empty($map['Network'])) {
                $model->network = [];
                $n              = 0;
                foreach ($map['Network'] as $item) {
                    $model->network[$n++] = null !== $item ? network::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PodId'])) {
            $model->podId = $map['PodId'];
        }
        if (isset($map['PodIp'])) {
            $model->podIp = $map['PodIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
