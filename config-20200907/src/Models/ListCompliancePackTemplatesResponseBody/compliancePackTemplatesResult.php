<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponseBody\compliancePackTemplatesResult\compliancePackTemplates;
use AlibabaCloud\Tea\Model;

class compliancePackTemplatesResult extends Model
{
    /**
     * @var compliancePackTemplates[]
     */
    public $compliancePackTemplates;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'compliancePackTemplates' => 'CompliancePackTemplates',
        'pageNumber'              => 'PageNumber',
        'pageSize'                => 'PageSize',
        'totalCount'              => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliancePackTemplates) {
            $res['CompliancePackTemplates'] = [];
            if (null !== $this->compliancePackTemplates && \is_array($this->compliancePackTemplates)) {
                $n = 0;
                foreach ($this->compliancePackTemplates as $item) {
                    $res['CompliancePackTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return compliancePackTemplatesResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePackTemplates'])) {
            if (!empty($map['CompliancePackTemplates'])) {
                $model->compliancePackTemplates = [];
                $n                              = 0;
                foreach ($map['CompliancePackTemplates'] as $item) {
                    $model->compliancePackTemplates[$n++] = null !== $item ? compliancePackTemplates::fromMap($item) : $item;
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
