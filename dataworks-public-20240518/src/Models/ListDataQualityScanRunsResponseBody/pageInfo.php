<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityScanRunsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityScanRunsResponseBody\pageInfo\dataQualityScanRuns;
use AlibabaCloud\Tea\Model;

class pageInfo extends Model
{
    /**
     * @var dataQualityScanRuns[]
     */
    public $dataQualityScanRuns;

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
     * @example 324
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataQualityScanRuns' => 'DataQualityScanRuns',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityScanRuns) {
            $res['DataQualityScanRuns'] = [];
            if (null !== $this->dataQualityScanRuns && \is_array($this->dataQualityScanRuns)) {
                $n = 0;
                foreach ($this->dataQualityScanRuns as $item) {
                    $res['DataQualityScanRuns'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DataQualityScanRuns'])) {
            if (!empty($map['DataQualityScanRuns'])) {
                $model->dataQualityScanRuns = [];
                $n = 0;
                foreach ($map['DataQualityScanRuns'] as $item) {
                    $model->dataQualityScanRuns[$n++] = null !== $item ? dataQualityScanRuns::fromMap($item) : $item;
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
