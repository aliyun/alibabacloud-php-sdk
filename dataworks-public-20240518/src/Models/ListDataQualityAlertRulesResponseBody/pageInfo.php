<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityAlertRulesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityAlertRulesResponseBody\pageInfo\dataQualityAlertRules;
use AlibabaCloud\Tea\Model;

class pageInfo extends Model
{
    /**
     * @var dataQualityAlertRules[]
     */
    public $dataQualityAlertRules;

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
     * @example 335
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataQualityAlertRules' => 'DataQualityAlertRules',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityAlertRules) {
            $res['DataQualityAlertRules'] = [];
            if (null !== $this->dataQualityAlertRules && \is_array($this->dataQualityAlertRules)) {
                $n = 0;
                foreach ($this->dataQualityAlertRules as $item) {
                    $res['DataQualityAlertRules'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DataQualityAlertRules'])) {
            if (!empty($map['DataQualityAlertRules'])) {
                $model->dataQualityAlertRules = [];
                $n = 0;
                foreach ($map['DataQualityAlertRules'] as $item) {
                    $model->dataQualityAlertRules[$n++] = null !== $item ? dataQualityAlertRules::fromMap($item) : $item;
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
