<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCensResponseBody\cens;
use AlibabaCloud\Tea\Model;

class DescribeCensResponseBody extends Model
{
    /**
     * @description The value of the tag.
     *
     * @var cens
     */
    public $cens;

    /**
     * @description The level of CIDR block overlapping.
     *
     **REDUCED**: Overlapped CIDR blocks are allowed. This value specifies that CIDR blocks can overlap but CIDR blocks cannot be duplicates.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The status of the CEN instance.
     *
     *   **Creating**: The CEN instance is being created.
     *   **Active**: The CEN instance is running.
     *   **Deleting**: The instance is being deleted.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the resource group to which the CEN instance belongs.
     *
     * @example 2BFA6822-240E-4E27-B4C8-AA400EF7474D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The IDs of the bandwidth plans that are associated with the CEN instance.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'cens'       => 'Cens',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cens) {
            $res['Cens'] = null !== $this->cens ? $this->cens->toMap() : null;
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
     * @return DescribeCensResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cens'])) {
            $model->cens = cens::fromMap($map['Cens']);
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
