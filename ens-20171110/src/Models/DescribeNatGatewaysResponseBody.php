<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNatGatewaysResponseBody\natGateways;
use AlibabaCloud\Tea\Model;

class DescribeNatGatewaysResponseBody extends Model
{
    /**
     * @var natGateways[]
     */
    public $natGateways;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 2818A8F4-5E2B-5611-8732-5ACF7B677059
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 49
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'natGateways' => 'NatGateways',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->natGateways) {
            $res['NatGateways'] = [];
            if (null !== $this->natGateways && \is_array($this->natGateways)) {
                $n = 0;
                foreach ($this->natGateways as $item) {
                    $res['NatGateways'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribeNatGatewaysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NatGateways'])) {
            if (!empty($map['NatGateways'])) {
                $model->natGateways = [];
                $n                  = 0;
                foreach ($map['NatGateways'] as $item) {
                    $model->natGateways[$n++] = null !== $item ? natGateways::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
