<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListTenantDeviceOtaInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListTenantDeviceOtaInfoResponseBody\data\tenantDeviceOtaInfos;

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
        if (\is_array($this->tenantDeviceOtaInfos)) {
            Model::validateArray($this->tenantDeviceOtaInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantDeviceOtaInfos) {
            if (\is_array($this->tenantDeviceOtaInfos)) {
                $res['TenantDeviceOtaInfos'] = [];
                $n1 = 0;
                foreach ($this->tenantDeviceOtaInfos as $item1) {
                    $res['TenantDeviceOtaInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantDeviceOtaInfos'])) {
            if (!empty($map['TenantDeviceOtaInfos'])) {
                $model->tenantDeviceOtaInfos = [];
                $n1 = 0;
                foreach ($map['TenantDeviceOtaInfos'] as $item1) {
                    $model->tenantDeviceOtaInfos[$n1] = tenantDeviceOtaInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
