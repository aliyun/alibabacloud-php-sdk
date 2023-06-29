<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeCategoryTemplateRuleListRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
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
     * @description The number of entries to return on each page. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The sensitivity level of the data that is not compliant with the rule. Valid values: **1** to **11**. Default value: **null**.
     *
     *   **1**: No sensitive data is detected.
     *   **2**: specifies the S1 sensitivity level.
     *   **3**: specifies the S2 sensitivity level.
     *   **4**: specifies the S3 sensitivity level.
     *   **5**: specifies the S4 sensitivity level.
     *   **6**: specifies the S5 sensitivity level.
     *   **7**: specifies the S6 sensitivity level.
     *   **8**: specifies the S7 sensitivity level.
     *   **9**: specifies the S8 sensitivity level.
     *   **10**: specifies the S9 sensitivity level.
     *   **11**: specifies the S10 sensitivity level.
     *   **null**: specifies all preceding sensitivity levels.
     *
     * @example 2
     *
     * @var int
     */
    public $riskLevelId;

    /**
     * @description The status of the rule. Default value: **null**. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *   **null**: all states
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'lang'        => 'Lang',
        'pageSize'    => 'PageSize',
        'riskLevelId' => 'RiskLevelId',
        'status'      => 'Status',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCategoryTemplateRuleListRequest
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
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
