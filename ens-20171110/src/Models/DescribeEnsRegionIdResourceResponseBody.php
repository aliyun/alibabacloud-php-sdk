<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdResourceResponseBody\ensRegionIdResources;
use AlibabaCloud\Tea\Model;

class DescribeEnsRegionIdResourceResponseBody extends Model
{
    /**
     * @var ensRegionIdResources
     */
    public $ensRegionIdResources;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'ensRegionIdResources' => 'EnsRegionIdResources',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionIdResources) {
            $res['EnsRegionIdResources'] = null !== $this->ensRegionIdResources ? $this->ensRegionIdResources->toMap() : null;
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
     * @return DescribeEnsRegionIdResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionIdResources'])) {
            $model->ensRegionIdResources = ensRegionIdResources::fromMap($map['EnsRegionIdResources']);
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
