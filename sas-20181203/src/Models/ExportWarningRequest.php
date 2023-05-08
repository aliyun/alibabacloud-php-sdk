<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ExportWarningRequest extends Model
{
    /**
     * @description Specifies whether the baseline risks are handled. Valid values:
     *
     *   **Y**: yes
     *   **N**: no
     *
     * @example N
     *
     * @var string
     */
    public $dealed;

    /**
     * @description The type of the export task. Set the value to **hc_check_warning**, which indicates tasks to export baseline check results.
     *
     * @example hc_check_warning
     *
     * @var string
     */
    public $exportType;

    /**
     * @description The export method of the results for the weak password baseline check. Valid values:
     *
     *   **0**: exports the check results after it is masked.
     *   **1**: exports the check results in plaintext.
     *
     * @example 0
     *
     * @var int
     */
    public $isCleartextPwd;

    /**
     * @description Specifies whether the baseline check results are aggregated and exported. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $isSummaryExport;

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
     * @description The ID of the risk item in the baseline check results. Separate multiple IDs with commas (,).
     *
     * @example 123,124
     *
     * @var string
     */
    public $riskIds;

    /**
     * @description The severity of the baseline check item. Separate multiple severities with commas (,). Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example high,medium
     *
     * @var string
     */
    public $riskLevels;

    /**
     * @description The name of the baseline.
     *
     * @example Alibaba Cloud Standard - Windows 2016/2019  Security Baseline
     *
     * @var string
     */
    public $riskName;

    /**
     * @description The source IP address of the request.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The status of the check item in the baseline check results. Separate multiple statuses with commas (,). Valid values:
     *
     *   **3**: passed
     *   **1**: failed
     *
     * @example 1,3
     *
     * @var string
     */
    public $statusList;

    /**
     * @description The ID of the baseline check policy.
     *
     * @example 12
     *
     * @var int
     */
    public $strategyId;

    /**
     * @description The subtypes of the baselines based on which baseline checks are performed. Separate multiple subtypes with commas (,).
     *
     * > You must set the value of this parameter to the value of the **TypeName** parameter that is contained in the **SubTypes** parameter. You can call the [DescribeRiskType](~~DescribeRiskType~~) operation to obtain the value of the TypeName parameter.
     * @example hc_middleware_ack_master
     *
     * @var string
     */
    public $subTypeNames;

    /**
     * @description The type of the baseline based on which baseline checks are performed.
     *
     * > You must set the value of this parameter to the value of the **TypeName** parameter that is returned by calling the [DescribeRiskType](~~DescribeRiskType~~) operation. If both the **TypeName** and **TypeNames** parameters are specified, only the **TypeName** parameter takes effect.
     * @example hc_container
     *
     * @var string
     */
    public $typeName;

    /**
     * @description The types of the baselines based on which baseline checks are performed. Separate multiple types with commas (,).
     *
     * > You must set the value of this parameter to the value of the **TypeName** parameter that is returned by calling the [DescribeRiskType](~~DescribeRiskType~~) operation. If both the **TypeName** and **TypeNames** parameters are specified, only the **TypeName** parameter takes effect.
     * @example hc_container,cis
     *
     * @var string
     */
    public $typeNames;

    /**
     * @description The UUID of the server whose baseline check results you want to export. Separate multiple UUIDs with commas (,).
     *
     * @example inet-7c676676-06fa-442e-90fb-b802e****,inet-7c676676-06fa-442e-90fb-b****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'dealed'          => 'Dealed',
        'exportType'      => 'ExportType',
        'isCleartextPwd'  => 'IsCleartextPwd',
        'isSummaryExport' => 'IsSummaryExport',
        'lang'            => 'Lang',
        'riskIds'         => 'RiskIds',
        'riskLevels'      => 'RiskLevels',
        'riskName'        => 'RiskName',
        'sourceIp'        => 'SourceIp',
        'statusList'      => 'StatusList',
        'strategyId'      => 'StrategyId',
        'subTypeNames'    => 'SubTypeNames',
        'typeName'        => 'TypeName',
        'typeNames'       => 'TypeNames',
        'uuids'           => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }
        if (null !== $this->isCleartextPwd) {
            $res['IsCleartextPwd'] = $this->isCleartextPwd;
        }
        if (null !== $this->isSummaryExport) {
            $res['IsSummaryExport'] = $this->isSummaryExport;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->riskIds) {
            $res['RiskIds'] = $this->riskIds;
        }
        if (null !== $this->riskLevels) {
            $res['RiskLevels'] = $this->riskLevels;
        }
        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->subTypeNames) {
            $res['SubTypeNames'] = $this->subTypeNames;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }
        if (null !== $this->typeNames) {
            $res['TypeNames'] = $this->typeNames;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportWarningRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }
        if (isset($map['IsCleartextPwd'])) {
            $model->isCleartextPwd = $map['IsCleartextPwd'];
        }
        if (isset($map['IsSummaryExport'])) {
            $model->isSummaryExport = $map['IsSummaryExport'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RiskIds'])) {
            $model->riskIds = $map['RiskIds'];
        }
        if (isset($map['RiskLevels'])) {
            $model->riskLevels = $map['RiskLevels'];
        }
        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StatusList'])) {
            $model->statusList = $map['StatusList'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['SubTypeNames'])) {
            $model->subTypeNames = $map['SubTypeNames'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }
        if (isset($map['TypeNames'])) {
            $model->typeNames = $map['TypeNames'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
