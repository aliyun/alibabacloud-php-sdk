<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePacksResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePacksResponseBody\compliancePacksResult\compliancePacks;
use AlibabaCloud\Tea\Model;

class compliancePacksResult extends Model
{
    /**
     * @description The details of the compliance package.
     *
     * @var compliancePacks[]
     */
    public $compliancePacks;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of compliance packages returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'compliancePacks' => 'CompliancePacks',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliancePacks) {
            $res['CompliancePacks'] = [];
            if (null !== $this->compliancePacks && \is_array($this->compliancePacks)) {
                $n = 0;
                foreach ($this->compliancePacks as $item) {
                    $res['CompliancePacks'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return compliancePacksResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePacks'])) {
            if (!empty($map['CompliancePacks'])) {
                $model->compliancePacks = [];
                $n                      = 0;
                foreach ($map['CompliancePacks'] as $item) {
                    $model->compliancePacks[$n++] = null !== $item ? compliancePacks::fromMap($item) : $item;
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
