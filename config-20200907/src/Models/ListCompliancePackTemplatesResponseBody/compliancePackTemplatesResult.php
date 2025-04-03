<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListCompliancePackTemplatesResponseBody\compliancePackTemplatesResult\compliancePackTemplates;

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
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->compliancePackTemplates)) {
            Model::validateArray($this->compliancePackTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compliancePackTemplates) {
            if (\is_array($this->compliancePackTemplates)) {
                $res['CompliancePackTemplates'] = [];
                $n1 = 0;
                foreach ($this->compliancePackTemplates as $item1) {
                    $res['CompliancePackTemplates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePackTemplates'])) {
            if (!empty($map['CompliancePackTemplates'])) {
                $model->compliancePackTemplates = [];
                $n1 = 0;
                foreach ($map['CompliancePackTemplates'] as $item1) {
                    $model->compliancePackTemplates[$n1++] = compliancePackTemplates::fromMap($item1);
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
