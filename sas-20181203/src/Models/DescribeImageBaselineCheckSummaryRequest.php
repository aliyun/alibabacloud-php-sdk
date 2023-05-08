<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageBaselineCheckSummaryRequest extends Model
{
    /**
     * @description The number of images on which **low** baseline risks are detected.
     *
     * @example c60b77fe62093480db6164a3c2fa5****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example Unauthorized access
     *
     * @var string
     */
    public $criteria;

    /**
     * @description The severity of the image baseline that you want to query. Separate multiple severities with commas (,). Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example BaselineNameAlias
     *
     * @var string
     */
    public $criteriaType;

    /**
     * @description The number of images on which **medium** baseline risks are detected.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description An array that consists of the check results of image baselines.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The timestamp when the last scan was performed. Unit: milliseconds.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of the page to return. Pages start from page **1**. Default value: **1**.
     *
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The keyword of the baseline category.
     *
     * @var string[]
     */
    public $scanRange;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'criteria'     => 'Criteria',
        'criteriaType' => 'CriteriaType',
        'currentPage'  => 'CurrentPage',
        'lang'         => 'Lang',
        'pageSize'     => 'PageSize',
        'riskLevel'    => 'RiskLevel',
        'scanRange'    => 'ScanRange',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->scanRange) {
            $res['ScanRange'] = $this->scanRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageBaselineCheckSummaryRequest
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['ScanRange'])) {
            if (!empty($map['ScanRange'])) {
                $model->scanRange = $map['ScanRange'];
            }
        }

        return $model;
    }
}
