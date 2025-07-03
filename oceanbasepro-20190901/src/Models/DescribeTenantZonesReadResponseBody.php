<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantZonesReadResponseBody\tenantZones;

class DescribeTenantZonesReadResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tenantZones[]
     */
    public $tenantZones;
    protected $_name = [
        'requestId' => 'RequestId',
        'tenantZones' => 'TenantZones',
    ];

    public function validate()
    {
        if (\is_array($this->tenantZones)) {
            Model::validateArray($this->tenantZones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tenantZones) {
            if (\is_array($this->tenantZones)) {
                $res['TenantZones'] = [];
                $n1 = 0;
                foreach ($this->tenantZones as $item1) {
                    $res['TenantZones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TenantZones'])) {
            if (!empty($map['TenantZones'])) {
                $model->tenantZones = [];
                $n1 = 0;
                foreach ($map['TenantZones'] as $item1) {
                    $model->tenantZones[$n1] = tenantZones::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
