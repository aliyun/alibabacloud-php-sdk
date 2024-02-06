<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\resourceInfos;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\resourceInfos\deviceInfos\network;
use AlibabaCloud\Tea\Model;

class deviceInfos extends Model
{
    /**
     * @description The name of the device.
     *
     * @example test-api
     *
     * @var string
     */
    public $name;

    /**
     * @description The network information.
     *
     * @var network[]
     */
    public $network;

    /**
     * @description The status.
     *
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'name'    => 'Name',
        'network' => 'Network',
        'status'  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->network) {
            $res['Network'] = [];
            if (null !== $this->network && \is_array($this->network)) {
                $n = 0;
                foreach ($this->network as $item) {
                    $res['Network'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Network'])) {
            if (!empty($map['Network'])) {
                $model->network = [];
                $n              = 0;
                foreach ($map['Network'] as $item) {
                    $model->network[$n++] = null !== $item ? network::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
