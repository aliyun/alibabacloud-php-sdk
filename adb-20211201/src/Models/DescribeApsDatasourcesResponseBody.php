<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourcesResponseBody\apsDatasources;
use AlibabaCloud\Tea\Model;

class DescribeApsDatasourcesResponseBody extends Model
{
    /**
     * @description -
     *
     * @example -
     *
     * @var apsDatasources[]
     */
    public $apsDatasources;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 30
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example ******-5213-******-B608-******
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'apsDatasources' => 'ApsDatasources',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apsDatasources) {
            $res['ApsDatasources'] = [];
            if (null !== $this->apsDatasources && \is_array($this->apsDatasources)) {
                $n = 0;
                foreach ($this->apsDatasources as $item) {
                    $res['ApsDatasources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeApsDatasourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApsDatasources'])) {
            if (!empty($map['ApsDatasources'])) {
                $model->apsDatasources = [];
                $n                     = 0;
                foreach ($map['ApsDatasources'] as $item) {
                    $model->apsDatasources[$n++] = null !== $item ? apsDatasources::fromMap($item) : $item;
                }
            }
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
