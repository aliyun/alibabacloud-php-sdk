<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesOverviewResponseBody\DBInstances;
use AlibabaCloud\Tea\Model;

class DescribeDBInstancesOverviewResponseBody extends Model
{
    /**
     * @description Details about the instances.
     *
     * @var DBInstances[]
     */
    public $DBInstances;

    /**
     * @description The ID of the request.
     *
     * @example 52820D2B-B2DD-59F0-BDF2-83EC19C6F1CA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of instances in the query result.
     *
     * @example 1
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'DBInstances' => 'DBInstances',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstances) {
            $res['DBInstances'] = [];
            if (null !== $this->DBInstances && \is_array($this->DBInstances)) {
                $n = 0;
                foreach ($this->DBInstances as $item) {
                    $res['DBInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstancesOverviewResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstances'])) {
            if (!empty($map['DBInstances'])) {
                $model->DBInstances = [];
                $n                  = 0;
                foreach ($map['DBInstances'] as $item) {
                    $model->DBInstances[$n++] = null !== $item ? DBInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
