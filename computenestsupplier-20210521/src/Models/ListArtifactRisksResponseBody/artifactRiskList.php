<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactRisksResponseBody;

use AlibabaCloud\Dara\Model;

class artifactRiskList extends Model
{
    /**
     * @var string
     */
    public $cveNos;
    /**
     * @var string
     */
    public $extendInfo;
    /**
     * @var string
     */
    public $level;
    /**
     * @var string
     */
    public $riskName;
    /**
     * @var string
     */
    public $riskType;
    /**
     * @var string
     */
    public $riskTypeName;
    /**
     * @var string
     */
    public $solution;
    protected $_name = [
        'cveNos'       => 'CveNos',
        'extendInfo'   => 'ExtendInfo',
        'level'        => 'Level',
        'riskName'     => 'RiskName',
        'riskType'     => 'RiskType',
        'riskTypeName' => 'RiskTypeName',
        'solution'     => 'Solution',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cveNos) {
            $res['CveNos'] = $this->cveNos;
        }

        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
        }

        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
        }

        if (null !== $this->riskTypeName) {
            $res['RiskTypeName'] = $this->riskTypeName;
        }

        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
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
        if (isset($map['CveNos'])) {
            $model->cveNos = $map['CveNos'];
        }

        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }

        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }

        if (isset($map['RiskTypeName'])) {
            $model->riskTypeName = $map['RiskTypeName'];
        }

        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }

        return $model;
    }
}
