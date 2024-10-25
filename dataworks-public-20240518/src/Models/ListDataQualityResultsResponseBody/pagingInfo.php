<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityResultsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityResultsResponseBody\pagingInfo\dataQualityResults;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @var dataQualityResults[]
     */
    public $dataQualityResults;

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
     * @example 219
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataQualityResults' => 'DataQualityResults',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityResults) {
            $res['DataQualityResults'] = [];
            if (null !== $this->dataQualityResults && \is_array($this->dataQualityResults)) {
                $n = 0;
                foreach ($this->dataQualityResults as $item) {
                    $res['DataQualityResults'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return pagingInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataQualityResults'])) {
            if (!empty($map['DataQualityResults'])) {
                $model->dataQualityResults = [];
                $n                         = 0;
                foreach ($map['DataQualityResults'] as $item) {
                    $model->dataQualityResults[$n++] = null !== $item ? dataQualityResults::fromMap($item) : $item;
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
