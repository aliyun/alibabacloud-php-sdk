<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityTemplatesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityTemplatesResponseBody\pageInfo\dataQualityTemplates;
use AlibabaCloud\Tea\Model;

class pageInfo extends Model
{
    /**
     * @var dataQualityTemplates[]
     */
    public $dataQualityTemplates;

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
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataQualityTemplates' => 'DataQualityTemplates',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityTemplates) {
            $res['DataQualityTemplates'] = [];
            if (null !== $this->dataQualityTemplates && \is_array($this->dataQualityTemplates)) {
                $n = 0;
                foreach ($this->dataQualityTemplates as $item) {
                    $res['DataQualityTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DataQualityTemplates'])) {
            if (!empty($map['DataQualityTemplates'])) {
                $model->dataQualityTemplates = [];
                $n = 0;
                foreach ($map['DataQualityTemplates'] as $item) {
                    $model->dataQualityTemplates[$n++] = null !== $item ? dataQualityTemplates::fromMap($item) : $item;
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
