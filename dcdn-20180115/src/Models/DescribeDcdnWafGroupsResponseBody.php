<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGroupsResponseBody\wafGroups;
use AlibabaCloud\Tea\Model;

class DescribeDcdnWafGroupsResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 16
     *
     * @var int
     */
    public $totalCount;

    /**
     * @var wafGroups[]
     */
    public $wafGroups;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'wafGroups'  => 'WafGroups',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->wafGroups) {
            $res['WafGroups'] = [];
            if (null !== $this->wafGroups && \is_array($this->wafGroups)) {
                $n = 0;
                foreach ($this->wafGroups as $item) {
                    $res['WafGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnWafGroupsResponseBody
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['WafGroups'])) {
            if (!empty($map['WafGroups'])) {
                $model->wafGroups = [];
                $n                = 0;
                foreach ($map['WafGroups'] as $item) {
                    $model->wafGroups[$n++] = null !== $item ? wafGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
