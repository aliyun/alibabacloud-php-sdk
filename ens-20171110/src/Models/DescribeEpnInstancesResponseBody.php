<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstancesResponseBody\EPNInstances;
use AlibabaCloud\Tea\Model;

class DescribeEpnInstancesResponseBody extends Model
{
    /**
     * @description Details of EPN instances.
     *
     * @var EPNInstances
     */
    public $EPNInstances;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 40
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example A1707FC0-430C-423A-B624-284046B20399
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of pages returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'EPNInstances' => 'EPNInstances',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->EPNInstances) {
            $res['EPNInstances'] = null !== $this->EPNInstances ? $this->EPNInstances->toMap() : null;
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
     * @return DescribeEpnInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EPNInstances'])) {
            $model->EPNInstances = EPNInstances::fromMap($map['EPNInstances']);
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
