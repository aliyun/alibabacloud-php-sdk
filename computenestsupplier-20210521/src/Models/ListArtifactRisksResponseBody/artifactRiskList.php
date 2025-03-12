<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListArtifactRisksResponseBody;

use AlibabaCloud\Tea\Model;

class artifactRiskList extends Model
{
    /**
     * @description CVE numbers
     *
     * @example CVE-2023-4911
     *
     * @var string
     */
    public $cveNos;

    /**
     * @description Extended information, in JSON format, to be parsed according to the risk category
     *
     * @example {
     * }
     * @var string
     */
    public $extendInfo;

    /**
     * @description Risk level:
     *
     * - high represents high
     * @example high
     *
     * @var string
     */
    public $level;

    /**
     * @description Risk name.
     *
     * @example USN-3686-1: file vulnerabilities
     *
     * @var string
     */
    public $riskName;

    /**
     * @description Risk type. Values:
     * - EcsBaseline  ECS image baseline check
     * @example AcrCve
     *
     * @var string
     */
    public $riskType;

    /**
     * @description Risk Type name
     *
     * @example Container System Vulner
     *
     * @var string
     */
    public $riskTypeName;

    /**
     * @description Solution for the risk item.
     *
     * @example apt-get update && apt-get install ntpdate --only-upgrade
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return artifactRiskList
     */
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
