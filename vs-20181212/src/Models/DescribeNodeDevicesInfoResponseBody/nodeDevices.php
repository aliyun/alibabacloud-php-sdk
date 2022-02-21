<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeNodeDevicesInfoResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeNodeDevicesInfoResponseBody\nodeDevices\deviceInfos;
use AlibabaCloud\Tea\Model;

class nodeDevices extends Model
{
    /**
     * @var deviceInfos[]
     */
    public $deviceInfos;

    /**
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'deviceInfos' => 'DeviceInfos',
        'nodeName'    => 'NodeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceInfos) {
            $res['DeviceInfos'] = [];
            if (null !== $this->deviceInfos && \is_array($this->deviceInfos)) {
                $n = 0;
                foreach ($this->deviceInfos as $item) {
                    $res['DeviceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeDevices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfos'])) {
            if (!empty($map['DeviceInfos'])) {
                $model->deviceInfos = [];
                $n                  = 0;
                foreach ($map['DeviceInfos'] as $item) {
                    $model->deviceInfos[$n++] = null !== $item ? deviceInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        return $model;
    }
}
