<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ExportWarningRequest extends Model
{
    /**
     * @var string
     */
    public $dealed;

    /**
     * @var string
     */
    public $exportType;

    /**
     * @var int
     */
    public $isCleartextPwd;

    /**
     * @var int
     */
    public $isSummaryExport;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $riskIds;

    /**
     * @var string
     */
    public $riskLevels;

    /**
     * @var string
     */
    public $riskName;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $statusList;

    /**
     * @var int
     */
    public $strategyId;

    /**
     * @var string
     */
    public $subTypeNames;

    /**
     * @var string
     */
    public $typeName;

    /**
     * @var string
     */
    public $typeNames;

    /**
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
