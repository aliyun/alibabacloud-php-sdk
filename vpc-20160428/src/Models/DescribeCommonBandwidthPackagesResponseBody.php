<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponseBody\commonBandwidthPackages;
use AlibabaCloud\Tea\Model;

class DescribeCommonBandwidthPackagesResponseBody extends Model
{
    /**
     * @description The time when the EIP bandwidth plan was created. The time is displayed in the `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @var commonBandwidthPackages
     */
    public $commonBandwidthPackages;

    /**
     * @description The time when the renewal took effect. The time is displayed in the `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The total number of entries returned.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The details of the EIP bandwidth plan.
     *
     * @example 20E6FD1C-7321-4DAD-BDFD-EC8769E4AA33
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the EIP bandwidth plan. Valid values:
     *
     *   **Available**: The EIP bandwidth plan is available.
     *   **Modifying**: The EIP bandwidth plan is being modified.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'commonBandwidthPackages' => 'CommonBandwidthPackages',
        'pageNumber'              => 'PageNumber',
        'pageSize'                => 'PageSize',
        'requestId'               => 'RequestId',
        'totalCount'              => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonBandwidthPackages) {
            $res['CommonBandwidthPackages'] = null !== $this->commonBandwidthPackages ? $this->commonBandwidthPackages->toMap() : null;
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
     * @return DescribeCommonBandwidthPackagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommonBandwidthPackages'])) {
            $model->commonBandwidthPackages = commonBandwidthPackages::fromMap($map['CommonBandwidthPackages']);
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
