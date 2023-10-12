<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\Module;

use AlibabaCloud\SDK\Cmn\V20200825\Models\Module\moduleDetails\deviceDetails;
use AlibabaCloud\Tea\Model;

class moduleDetails extends Model
{
    /**
     * @var deviceDetails[]
     */
    public $deviceDetails;

    /**
     * @example 2
     *
     * @var int
     */
    public $orderNumber;
    protected $_name = [
        'deviceDetails' => 'DeviceDetails',
        'orderNumber'   => 'OrderNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceDetails) {
            $res['DeviceDetails'] = [];
            if (null !== $this->deviceDetails && \is_array($this->deviceDetails)) {
                $n = 0;
                foreach ($this->deviceDetails as $item) {
                    $res['DeviceDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orderNumber) {
            $res['OrderNumber'] = $this->orderNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceDetails'])) {
            if (!empty($map['DeviceDetails'])) {
                $model->deviceDetails = [];
                $n                    = 0;
                foreach ($map['DeviceDetails'] as $item) {
                    $model->deviceDetails[$n++] = null !== $item ? deviceDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OrderNumber'])) {
            $model->orderNumber = $map['OrderNumber'];
        }

        return $model;
    }
}
