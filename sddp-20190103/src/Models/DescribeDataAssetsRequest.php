<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataAssetsRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The language of the content within the request and response. Default value: **zh_cn**. Valid values:
     *
     *   **zh_cn**: Simplified Chinese
     *   **en_us**: English
     *
     * @example zh_cn
     *
     * @var string
     */
    public $lang;

    /**
     * @description The keyword that is used to search for data assets. Fuzzy search is supported.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the data asset that you want to query. Valid values:
     *
     *   **1**: MaxCompute project
     *   **2**: MaxCompute table
     *   **3**: MaxCompute package
     *   **11**: AnalyticDB for MySQL database
     *   **12**: AnalyticDB for MySQL table
     *   **21**: Object Storage Service (OSS) bucket
     *   **22**: OSS object
     *   **31**: Tablestore instance
     *   **32**: Tablestore table
     *   **51**: ApsaraDB RDS database
     *   **52**: ApsaraDB RDS table
     *   **61**: self-managed database hosted on an Elastic Compute Service (ECS) instance
     *   **62**: self-managed table hosted on an ECS instance
     *   **71**: PolarDB-X database
     *   **72**: PolarDB-X table
     *   **81**: PolarDB database
     *   **82**: PolarDB table
     *   **91**: AnalyticDB for PostgreSQL database
     *   **92**: AnalyticDB for PostgreSQL table
     *
     * @example 1
     *
     * @var int
     */
    public $rangeId;

    /**
     * @description The sensitivity level of the data asset. Separate multiple sensitivity levels with commas (,). Valid values:
     *
     *   **2**: S1, indicating the low sensitivity level
     *   **3**: S2, indicating the medium sensitivity level
     *   **4**: S3, indicating the high sensitivity level
     *   **5**: S4, indicating the highest sensitivity level
     *
     * @example 2
     *
     * @var string
     */
    public $riskLevels;

    /**
     * @description The unique ID of the sensitive data detection rule that the data assets to be queried hit.
     *
     * > If you query sensitive data detection results based on the sensitive data detection rule that the data assets hit, you can call the [DescribeRules](~~DescribeRules~~) operation to query the ID of the sensitive data detection rule.
     * @example 11122200
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'lang'        => 'Lang',
        'name'        => 'Name',
        'pageSize'    => 'PageSize',
        'rangeId'     => 'RangeId',
        'riskLevels'  => 'RiskLevels',
        'ruleId'      => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->rangeId) {
            $res['RangeId'] = $this->rangeId;
        }
        if (null !== $this->riskLevels) {
            $res['RiskLevels'] = $this->riskLevels;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataAssetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RangeId'])) {
            $model->rangeId = $map['RangeId'];
        }
        if (isset($map['RiskLevels'])) {
            $model->riskLevels = $map['RiskLevels'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
