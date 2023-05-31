<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListInterceptionRulePageRequest extends Model
{
    /**
     * @description The ID of the container cluster.
     *
     * @example cc41de13ab5474210bc0ce772a009****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The query condition.
     *
     * @example 80
     *
     * @var string
     */
    public $criteria;

    /**
     * @description The type of the query condition. Valid values:
     *
     *   **ID**
     *   **RULE_NAME**
     *   **SRC_TARGET**
     *   **DST_TARGET**
     *   **DST_PORT**
     *   **RULE_SWITCH**
     *   **INTERCEPTOR_TYPE**
     *
     * @example DST_PORT
     *
     * @var string
     */
    public $criteriaType;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'criteria'     => 'Criteria',
        'criteriaType' => 'CriteriaType',
        'currentPage'  => 'CurrentPage',
        'pageSize'     => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }
        if (null !== $this->criteriaType) {
            $res['CriteriaType'] = $this->criteriaType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInterceptionRulePageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['CriteriaType'])) {
            $model->criteriaType = $map['CriteriaType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
