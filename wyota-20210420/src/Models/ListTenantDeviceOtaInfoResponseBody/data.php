<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListTenantDeviceOtaInfoResponseBody;

use AlibabaCloud\SDK\Wyota\V20210420\Models\ListTenantDeviceOtaInfoResponseBody\data\tenantDeviceOtaInfos;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var tenantDeviceOtaInfos[]
     */
    public $tenantDeviceOtaInfos;
    protected $_name = [
        'tenantDeviceOtaInfos' => 'TenantDeviceOtaInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantDeviceOtaInfos) {
            $res['TenantDeviceOtaInfos'] = [];
            if (null !== $this->tenantDeviceOtaInfos && \is_array($this->tenantDeviceOtaInfos)) {
                $n = 0;
                foreach ($this->tenantDeviceOtaInfos as $item) {
                    $res['TenantDeviceOtaInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['TenantDeviceOtaInfos'])) {
            if (!empty($map['TenantDeviceOtaInfos'])) {
                $model->tenantDeviceOtaInfos = [];
                $n                           = 0;
                foreach ($map['TenantDeviceOtaInfos'] as $item) {
                    $model->tenantDeviceOtaInfos[$n++] = null !== $item ? tenantDeviceOtaInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
