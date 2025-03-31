<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRuleTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRuleTemplatesResponseBody\pagingInfo\dataQualityRuleTemplates;

class pagingInfo extends Model
{
    /**
     * @var dataQualityRuleTemplates[]
     */
    public $dataQualityRuleTemplates;

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
        'dataQualityRuleTemplates' => 'DataQualityRuleTemplates',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->dataQualityRuleTemplates)) {
            Model::validateArray($this->dataQualityRuleTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQualityRuleTemplates) {
            if (\is_array($this->dataQualityRuleTemplates)) {
                $res['DataQualityRuleTemplates'] = [];
                $n1 = 0;
                foreach ($this->dataQualityRuleTemplates as $item1) {
                    $res['DataQualityRuleTemplates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataQualityRuleTemplates'])) {
            if (!empty($map['DataQualityRuleTemplates'])) {
                $model->dataQualityRuleTemplates = [];
                $n1 = 0;
                foreach ($map['DataQualityRuleTemplates'] as $item1) {
                    $model->dataQualityRuleTemplates[$n1++] = dataQualityRuleTemplates::fromMap($item1);
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
