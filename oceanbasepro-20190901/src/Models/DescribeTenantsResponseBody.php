<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantsResponseBody\tenants;

class DescribeTenantsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tenants[]
     */
    public $tenants;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'tenants' => 'Tenants',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->tenants)) {
            Model::validateArray($this->tenants);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tenants) {
            if (\is_array($this->tenants)) {
                $res['Tenants'] = [];
                $n1 = 0;
                foreach ($this->tenants as $item1) {
                    $res['Tenants'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        if (isset($map['Tenants'])) {
            if (!empty($map['Tenants'])) {
                $model->tenants = [];
                $n1 = 0;
                foreach ($map['Tenants'] as $item1) {
                    $model->tenants[$n1] = tenants::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
