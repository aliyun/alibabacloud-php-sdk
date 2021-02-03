<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstancesResponse\gtmInstances;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmInstancesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalItems;

    /**
     * @var int
     */
    public $totalPages;

    /**
     * @var gtmInstances[]
     */
    public $gtmInstances;
    protected $_name = [
        'requestId'    => 'RequestId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'totalItems'   => 'TotalItems',
        'totalPages'   => 'TotalPages',
        'gtmInstances' => 'GtmInstances',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalItems', $this->totalItems, true);
        Model::validateRequired('totalPages', $this->totalPages, true);
        Model::validateRequired('gtmInstances', $this->gtmInstances, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalItems) {
            $res['TotalItems'] = $this->totalItems;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }
        if (null !== $this->gtmInstances) {
            $res['GtmInstances'] = [];
            if (null !== $this->gtmInstances && \is_array($this->gtmInstances)) {
                $n = 0;
                foreach ($this->gtmInstances as $item) {
                    $res['GtmInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmInstancesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalItems'])) {
            $model->totalItems = $map['TotalItems'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }
        if (isset($map['GtmInstances'])) {
            if (!empty($map['GtmInstances'])) {
                $model->gtmInstances = [];
                $n                   = 0;
                foreach ($map['GtmInstances'] as $item) {
                    $model->gtmInstances[$n++] = null !== $item ? gtmInstances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
