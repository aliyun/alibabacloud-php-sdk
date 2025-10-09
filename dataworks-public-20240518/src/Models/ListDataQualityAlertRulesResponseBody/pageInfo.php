<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityAlertRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityAlertRulesResponseBody\pageInfo\dataQualityAlertRules;

class pageInfo extends Model
{
    /**
     * @var dataQualityAlertRules[]
     */
    public $dataQualityAlertRules;

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
        'dataQualityAlertRules' => 'DataQualityAlertRules',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->dataQualityAlertRules)) {
            Model::validateArray($this->dataQualityAlertRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQualityAlertRules) {
            if (\is_array($this->dataQualityAlertRules)) {
                $res['DataQualityAlertRules'] = [];
                $n1 = 0;
                foreach ($this->dataQualityAlertRules as $item1) {
                    $res['DataQualityAlertRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['DataQualityAlertRules'])) {
            if (!empty($map['DataQualityAlertRules'])) {
                $model->dataQualityAlertRules = [];
                $n1 = 0;
                foreach ($map['DataQualityAlertRules'] as $item1) {
                    $model->dataQualityAlertRules[$n1] = dataQualityAlertRules::fromMap($item1);
                    ++$n1;
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
