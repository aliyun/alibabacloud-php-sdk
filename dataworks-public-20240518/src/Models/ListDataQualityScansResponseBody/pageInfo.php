<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityScansResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityScansResponseBody\pageInfo\dataQualityScans;
use AlibabaCloud\Tea\Model;

class pageInfo extends Model
{
    /**
     * @var dataQualityScans[]
     */
    public $dataQualityScans;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataQualityScans' => 'DataQualityScans',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityScans) {
            $res['DataQualityScans'] = [];
            if (null !== $this->dataQualityScans && \is_array($this->dataQualityScans)) {
                $n = 0;
                foreach ($this->dataQualityScans as $item) {
                    $res['DataQualityScans'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataQualityScans'])) {
            if (!empty($map['DataQualityScans'])) {
                $model->dataQualityScans = [];
                $n = 0;
                foreach ($map['DataQualityScans'] as $item) {
                    $model->dataQualityScans[$n++] = null !== $item ? dataQualityScans::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
