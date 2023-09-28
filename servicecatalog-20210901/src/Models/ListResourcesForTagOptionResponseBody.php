<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListResourcesForTagOptionResponseBody\resourceDetails;
use AlibabaCloud\Tea\Model;

class ListResourcesForTagOptionResponseBody extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * Pages start from page 1. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * Valid values: 1 to 100 Minimum value: 1. Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example E465F21C-8712-5794-A754-5E4D9152****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the associated resources.
     *
     * @var resourceDetails[]
     */
    public $resourceDetails;

    /**
     * @description The total number of entries returned.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'resourceDetails' => 'ResourceDetails',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceDetails) {
            $res['ResourceDetails'] = [];
            if (null !== $this->resourceDetails && \is_array($this->resourceDetails)) {
                $n = 0;
                foreach ($this->resourceDetails as $item) {
                    $res['ResourceDetails'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListResourcesForTagOptionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceDetails'])) {
            if (!empty($map['ResourceDetails'])) {
                $model->resourceDetails = [];
                $n                      = 0;
                foreach ($map['ResourceDetails'] as $item) {
                    $model->resourceDetails[$n++] = null !== $item ? resourceDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
