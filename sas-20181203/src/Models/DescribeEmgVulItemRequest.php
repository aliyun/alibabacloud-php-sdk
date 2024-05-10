<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeEmgVulItemRequest extends Model
{
    /**
     * @description The check method. Valid values:
     *
     *   **0**: proof of concept (POC) verification
     *   **1**: version comparison
     *
     * @example 0
     *
     * @var int
     */
    public $checkType;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

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
     * @description The number of entries to return on each page. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether the vulnerability poses risks.\\
     * If you do not specify this parameter, all vulnerabilities are queried regardless of whether the vulnerabilities pose risks. Valid values:
     *
     *   **y**: yes
     *   **n**: no
     *
     * @example y
     *
     * @var string
     */
    public $riskStatus;

    /**
     * @description The method that is used to detect the vulnerability.\\
     * If you do not specify this parameter, all vulnerabilities are queried regardless of which method is used. Valid values:
     *
     *   **python**: The Version method is used. Security Center checks the software versions of your server to check whether disclosed vulnerabilities exist on your server.
     *   **scan**: The Network Scan method is used. Security Center analyzes the access traffic to your server over the Internet to check whether vulnerabilities exist on your server.
     *
     * @example python
     *
     * @var string
     */
    public $scanType;

    /**
     * @description The name of the urgent vulnerability.
     *
     * @example Changjietong T + SetupAccount/Upload.aspx file Upload vulnerability (CNVD-2022-60632)
     *
     * @var string
     */
    public $vulName;
    protected $_name = [
        'checkType'   => 'CheckType',
        'currentPage' => 'CurrentPage',
        'lang'        => 'Lang',
        'pageSize'    => 'PageSize',
        'riskStatus'  => 'RiskStatus',
        'scanType'    => 'ScanType',
        'vulName'     => 'VulName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
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
        if (null !== $this->riskStatus) {
            $res['RiskStatus'] = $this->riskStatus;
        }
        if (null !== $this->scanType) {
            $res['ScanType'] = $this->scanType;
        }
        if (null !== $this->vulName) {
            $res['VulName'] = $this->vulName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEmgVulItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
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
        if (isset($map['RiskStatus'])) {
            $model->riskStatus = $map['RiskStatus'];
        }
        if (isset($map['ScanType'])) {
            $model->scanType = $map['ScanType'];
        }
        if (isset($map['VulName'])) {
            $model->vulName = $map['VulName'];
        }

        return $model;
    }
}
