<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRuleTemplateResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRuleTemplateResponseBody\pagingInfo\dataQualityRuleTemplates;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @description The templates.
     *
     * @var dataQualityRuleTemplates[]
     */
    public $dataQualityRuleTemplates;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 42
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataQualityRuleTemplates' => 'DataQualityRuleTemplates',
        'pageNumber'               => 'PageNumber',
        'pageSize'                 => 'PageSize',
        'totalCount'               => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityRuleTemplates) {
            $res['DataQualityRuleTemplates'] = [];
            if (null !== $this->dataQualityRuleTemplates && \is_array($this->dataQualityRuleTemplates)) {
                $n = 0;
                foreach ($this->dataQualityRuleTemplates as $item) {
                    $res['DataQualityRuleTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DataQualityRuleTemplates'])) {
            if (!empty($map['DataQualityRuleTemplates'])) {
                $model->dataQualityRuleTemplates = [];
                $n                               = 0;
                foreach ($map['DataQualityRuleTemplates'] as $item) {
                    $model->dataQualityRuleTemplates[$n++] = null !== $item ? dataQualityRuleTemplates::fromMap($item) : $item;
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
