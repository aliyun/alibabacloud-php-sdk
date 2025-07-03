<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class DeleteTenantsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $tenantIds;
    protected $_name = [
        'requestId' => 'RequestId',
        'tenantIds' => 'TenantIds',
    ];

    public function validate()
    {
        if (\is_array($this->tenantIds)) {
            Model::validateArray($this->tenantIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tenantIds) {
            if (\is_array($this->tenantIds)) {
                $res['TenantIds'] = [];
                $n1 = 0;
                foreach ($this->tenantIds as $item1) {
                    $res['TenantIds'][$n1] = $item1;
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

        if (isset($map['TenantIds'])) {
            if (!empty($map['TenantIds'])) {
                $model->tenantIds = [];
                $n1 = 0;
                foreach ($map['TenantIds'] as $item1) {
                    $model->tenantIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
