<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListDeviceOtaTaskByTenantResponseBody;

use AlibabaCloud\SDK\Wyota\V20210420\Models\ListDeviceOtaTaskByTenantResponseBody\data\tenantDeviceOtaTasks;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var tenantDeviceOtaTasks[]
     */
    public $tenantDeviceOtaTasks;
    protected $_name = [
        'tenantDeviceOtaTasks' => 'TenantDeviceOtaTasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantDeviceOtaTasks) {
            $res['TenantDeviceOtaTasks'] = [];
            if (null !== $this->tenantDeviceOtaTasks && \is_array($this->tenantDeviceOtaTasks)) {
                $n = 0;
                foreach ($this->tenantDeviceOtaTasks as $item) {
                    $res['TenantDeviceOtaTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantDeviceOtaTasks'])) {
            if (!empty($map['TenantDeviceOtaTasks'])) {
                $model->tenantDeviceOtaTasks = [];
                $n                           = 0;
                foreach ($map['TenantDeviceOtaTasks'] as $item) {
                    $model->tenantDeviceOtaTasks[$n++] = null !== $item ? tenantDeviceOtaTasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
