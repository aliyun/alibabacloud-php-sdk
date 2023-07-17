<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertRulesResponseBody;

use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertRulesResponseBody\pageBean\alertRules;
use AlibabaCloud\Tea\Model;

class pageBean extends Model
{
    /**
     * @var alertRules[]
     */
    public $alertRules;

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
        'alertRules' => 'AlertRules',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertRules) {
            $res['AlertRules'] = [];
            if (null !== $this->alertRules && \is_array($this->alertRules)) {
                $n = 0;
                foreach ($this->alertRules as $item) {
                    $res['AlertRules'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return pageBean
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertRules'])) {
            if (!empty($map['AlertRules'])) {
                $model->alertRules = [];
                $n                 = 0;
                foreach ($map['AlertRules'] as $item) {
                    $model->alertRules[$n++] = null !== $item ? alertRules::fromMap($item) : $item;
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
