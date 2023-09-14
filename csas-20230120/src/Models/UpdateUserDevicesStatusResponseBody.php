<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserDevicesStatusResponseBody\devices;
use AlibabaCloud\Tea\Model;

class UpdateUserDevicesStatusResponseBody extends Model
{
    /**
     * @var devices[]
     */
    public $devices;

    /**
     * @example 5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'devices'   => 'Devices',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->devices) {
            $res['Devices'] = [];
            if (null !== $this->devices && \is_array($this->devices)) {
                $n = 0;
                foreach ($this->devices as $item) {
                    $res['Devices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserDevicesStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Devices'])) {
            if (!empty($map['Devices'])) {
                $model->devices = [];
                $n              = 0;
                foreach ($map['Devices'] as $item) {
                    $model->devices[$n++] = null !== $item ? devices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
