<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody\devices\device;
use AlibabaCloud\Tea\Model;

class devices extends Model
{
    /**
     * @var device[]
     */
    public $device;
    protected $_name = [
        'device' => 'Device',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->device) {
            $res['Device'] = [];
            if (null !== $this->device && \is_array($this->device)) {
                $n = 0;
                foreach ($this->device as $item) {
                    $res['Device'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return devices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Device'])) {
            if (!empty($map['Device'])) {
                $model->device = [];
                $n             = 0;
                foreach ($map['Device'] as $item) {
                    $model->device[$n++] = null !== $item ? device::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
