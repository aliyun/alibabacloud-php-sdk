<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryDeviceStatusRequest;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryDeviceStatusRequest\payload\locationDevices;
use AlibabaCloud\Tea\Model;

class payload extends Model
{
    /**
     * @var locationDevices[]
     */
    public $locationDevices;

    /**
     * @var string[]
     */
    public $properties;
    protected $_name = [
        'locationDevices' => 'LocationDevices',
        'properties'      => 'Properties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locationDevices) {
            $res['LocationDevices'] = [];
            if (null !== $this->locationDevices && \is_array($this->locationDevices)) {
                $n = 0;
                foreach ($this->locationDevices as $item) {
                    $res['LocationDevices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocationDevices'])) {
            if (!empty($map['LocationDevices'])) {
                $model->locationDevices = [];
                $n                      = 0;
                foreach ($map['LocationDevices'] as $item) {
                    $model->locationDevices[$n++] = null !== $item ? locationDevices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }

        return $model;
    }
}
