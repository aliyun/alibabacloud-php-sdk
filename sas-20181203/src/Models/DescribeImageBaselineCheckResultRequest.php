<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageBaselineCheckResultRequest extends Model
{
    /**
     * @description The search condition for the image baseline.
     *
     * @example ak_leak
     *
     * @var string
     */
    public $criteria;

    /**
     * @description The type of the search condition. Valid values:
     *
     *   **BaselineNameAlias**: baseline name
     *   **BaselineClassAlias**: baseline category
     *
     * @example BaselineNameAlias
     *
     * @var string
     */
    public $criteriaType;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The UUID of the image.
     *
     * This parameter is required.
     * @example a910053dd4710173ecc9e9d8931f****
     *
     * @var string
     */
    public $imageUuid;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The severity of the image baseline that you want to query. Separate multiple severities with commas (,). By default, all valid values are used. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example high,medium,low
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The types of the assets that you want to scan.
     *
     * @var string[]
     */
    public $scanRange;
    protected $_name = [
        'criteria'     => 'Criteria',
        'criteriaType' => 'CriteriaType',
        'currentPage'  => 'CurrentPage',
        'imageUuid'    => 'ImageUuid',
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
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }
        if (null !== $this->criteriaType) {
            $res['CriteriaType'] = $this->criteriaType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->imageUuid) {
            $res['ImageUuid'] = $this->imageUuid;
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
     * @return DescribeImageBaselineCheckResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['CriteriaType'])) {
            $model->criteriaType = $map['CriteriaType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ImageUuid'])) {
            $model->imageUuid = $map['ImageUuid'];
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
