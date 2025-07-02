<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListDeviceOtaTaskByTenantResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wyota\V20210420\Models\ListDeviceOtaTaskByTenantResponseBody\data\tenantDeviceOtaTasks;

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
        if (\is_array($this->tenantDeviceOtaTasks)) {
            Model::validateArray($this->tenantDeviceOtaTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantDeviceOtaTasks) {
            if (\is_array($this->tenantDeviceOtaTasks)) {
                $res['TenantDeviceOtaTasks'] = [];
                $n1 = 0;
                foreach ($this->tenantDeviceOtaTasks as $item1) {
                    $res['TenantDeviceOtaTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TenantDeviceOtaTasks'])) {
            if (!empty($map['TenantDeviceOtaTasks'])) {
                $model->tenantDeviceOtaTasks = [];
                $n1 = 0;
                foreach ($map['TenantDeviceOtaTasks'] as $item1) {
                    $model->tenantDeviceOtaTasks[$n1] = tenantDeviceOtaTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
