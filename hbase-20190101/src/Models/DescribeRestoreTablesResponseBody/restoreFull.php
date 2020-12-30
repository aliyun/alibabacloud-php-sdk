<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreTablesResponseBody;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreTablesResponseBody\restoreFull\restoreFullDetails;
use AlibabaCloud\Tea\Model;

class restoreFull extends Model
{
    /**
     * @var int
     */
    public $succeed;

    /**
     * @var string
     */
    public $dataSize;

    /**
     * @var string
     */
    public $speed;

    /**
     * @var restoreFullDetails
     */
    public $restoreFullDetails;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $fail;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'succeed'            => 'Succeed',
        'dataSize'           => 'DataSize',
        'speed'              => 'Speed',
        'restoreFullDetails' => 'RestoreFullDetails',
        'pageSize'           => 'PageSize',
        'fail'               => 'Fail',
        'pageNumber'         => 'PageNumber',
        'total'              => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->succeed) {
            $res['Succeed'] = $this->succeed;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->restoreFullDetails) {
            $res['RestoreFullDetails'] = null !== $this->restoreFullDetails ? $this->restoreFullDetails->toMap() : null;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->fail) {
            $res['Fail'] = $this->fail;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return restoreFull
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Succeed'])) {
            $model->succeed = $map['Succeed'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['RestoreFullDetails'])) {
            $model->restoreFullDetails = restoreFullDetails::fromMap($map['RestoreFullDetails']);
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Fail'])) {
            $model->fail = $map['Fail'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
