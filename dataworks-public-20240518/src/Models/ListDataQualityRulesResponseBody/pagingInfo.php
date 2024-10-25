<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRulesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRulesResponseBody\pagingInfo\dataQualityRules;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @var dataQualityRules[]
     */
    public $dataQualityRules;

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
     * @example 294
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataQualityRules' => 'DataQualityRules',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityRules) {
            $res['DataQualityRules'] = [];
            if (null !== $this->dataQualityRules && \is_array($this->dataQualityRules)) {
                $n = 0;
                foreach ($this->dataQualityRules as $item) {
                    $res['DataQualityRules'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DataQualityRules'])) {
            if (!empty($map['DataQualityRules'])) {
                $model->dataQualityRules = [];
                $n                       = 0;
                foreach ($map['DataQualityRules'] as $item) {
                    $model->dataQualityRules[$n++] = null !== $item ? dataQualityRules::fromMap($item) : $item;
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
