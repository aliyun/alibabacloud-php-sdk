<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantsResponseBody\tenants;
use AlibabaCloud\Tea\Model;

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
        'requestId'  => 'RequestId',
        'tenants'    => 'Tenants',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tenants) {
            $res['Tenants'] = [];
            if (null !== $this->tenants && \is_array($this->tenants)) {
                $n = 0;
                foreach ($this->tenants as $item) {
                    $res['Tenants'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTenantsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Tenants'])) {
            if (!empty($map['Tenants'])) {
                $model->tenants = [];
                $n              = 0;
                foreach ($map['Tenants'] as $item) {
                    $model->tenants[$n++] = null !== $item ? tenants::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
