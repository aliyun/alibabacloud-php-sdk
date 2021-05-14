<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstancesResponseBody\dbInstances;
use AlibabaCloud\Tea\Model;

class DescribeDrdsDbInstancesResponseBody extends Model
{
    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $total;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var dbInstances
     */
    public $dbInstances;
    protected $_name = [
        'pageSize'    => 'PageSize',
        'pageNumber'  => 'PageNumber',
        'requestId'   => 'RequestId',
        'total'       => 'Total',
        'success'     => 'Success',
        'dbInstances' => 'DbInstances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->dbInstances) {
            $res['DbInstances'] = null !== $this->dbInstances ? $this->dbInstances->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDrdsDbInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['DbInstances'])) {
            $model->dbInstances = dbInstances::fromMap($map['DbInstances']);
        }

        return $model;
    }
}
