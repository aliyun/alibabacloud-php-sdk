<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSoarStrategiesResponseBody\soarStrategies;
use AlibabaCloud\Tea\Model;

class DescribeSoarStrategiesResponseBody extends Model
{
    /**
     * @description The page number. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 4BB99533-4FDC-5B9C-A5E4-5AE3E9BE5C78
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The policies.
     *
     * @var soarStrategies[]
     */
    public $soarStrategies;

    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'soarStrategies' => 'SoarStrategies',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

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
        if (null !== $this->soarStrategies) {
            $res['SoarStrategies'] = [];
            if (null !== $this->soarStrategies && \is_array($this->soarStrategies)) {
                $n = 0;
                foreach ($this->soarStrategies as $item) {
                    $res['SoarStrategies'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeSoarStrategiesResponseBody
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
        if (isset($map['SoarStrategies'])) {
            if (!empty($map['SoarStrategies'])) {
                $model->soarStrategies = [];
                $n = 0;
                foreach ($map['SoarStrategies'] as $item) {
                    $model->soarStrategies[$n++] = null !== $item ? soarStrategies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
