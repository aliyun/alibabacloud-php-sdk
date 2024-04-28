<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models\ListInstanceResponseBody\data\instances;

use AlibabaCloud\Tea\Model;

class spec extends Model
{
    /**
     * @var string
     */
    public $coverage;

    /**
     * @var string
     */
    public $diversionType;

    /**
     * @var string
     */
    public $edition;

    /**
     * @var string
     */
    public $idcNumbers;

    /**
     * @var string
     */
    public $initialInstallation;

    /**
     * @var string
     */
    public $initialQty;

    /**
     * @var string
     */
    public $ipSubnetNums;

    /**
     * @var string
     */
    public $mitigationAnalysis;

    /**
     * @var string
     */
    public $mitigationAnalysisCapacity;

    /**
     * @var string
     */
    public $mitigationCapacity;

    /**
     * @var string
     */
    public $mitigationNums;

    /**
     * @var string
     */
    public $normalBandwidth;
    protected $_name = [
        'coverage'                   => 'Coverage',
        'diversionType'              => 'DiversionType',
        'edition'                    => 'Edition',
        'idcNumbers'                 => 'IdcNumbers',
        'initialInstallation'        => 'InitialInstallation',
        'initialQty'                 => 'InitialQty',
        'ipSubnetNums'               => 'IpSubnetNums',
        'mitigationAnalysis'         => 'MitigationAnalysis',
        'mitigationAnalysisCapacity' => 'MitigationAnalysisCapacity',
        'mitigationCapacity'         => 'MitigationCapacity',
        'mitigationNums'             => 'MitigationNums',
        'normalBandwidth'            => 'NormalBandwidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverage) {
            $res['Coverage'] = $this->coverage;
        }
        if (null !== $this->diversionType) {
            $res['DiversionType'] = $this->diversionType;
        }
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->idcNumbers) {
            $res['IdcNumbers'] = $this->idcNumbers;
        }
        if (null !== $this->initialInstallation) {
            $res['InitialInstallation'] = $this->initialInstallation;
        }
        if (null !== $this->initialQty) {
            $res['InitialQty'] = $this->initialQty;
        }
        if (null !== $this->ipSubnetNums) {
            $res['IpSubnetNums'] = $this->ipSubnetNums;
        }
        if (null !== $this->mitigationAnalysis) {
            $res['MitigationAnalysis'] = $this->mitigationAnalysis;
        }
        if (null !== $this->mitigationAnalysisCapacity) {
            $res['MitigationAnalysisCapacity'] = $this->mitigationAnalysisCapacity;
        }
        if (null !== $this->mitigationCapacity) {
            $res['MitigationCapacity'] = $this->mitigationCapacity;
        }
        if (null !== $this->mitigationNums) {
            $res['MitigationNums'] = $this->mitigationNums;
        }
        if (null !== $this->normalBandwidth) {
            $res['NormalBandwidth'] = $this->normalBandwidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Coverage'])) {
            $model->coverage = $map['Coverage'];
        }
        if (isset($map['DiversionType'])) {
            $model->diversionType = $map['DiversionType'];
        }
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['IdcNumbers'])) {
            $model->idcNumbers = $map['IdcNumbers'];
        }
        if (isset($map['InitialInstallation'])) {
            $model->initialInstallation = $map['InitialInstallation'];
        }
        if (isset($map['InitialQty'])) {
            $model->initialQty = $map['InitialQty'];
        }
        if (isset($map['IpSubnetNums'])) {
            $model->ipSubnetNums = $map['IpSubnetNums'];
        }
        if (isset($map['MitigationAnalysis'])) {
            $model->mitigationAnalysis = $map['MitigationAnalysis'];
        }
        if (isset($map['MitigationAnalysisCapacity'])) {
            $model->mitigationAnalysisCapacity = $map['MitigationAnalysisCapacity'];
        }
        if (isset($map['MitigationCapacity'])) {
            $model->mitigationCapacity = $map['MitigationCapacity'];
        }
        if (isset($map['MitigationNums'])) {
            $model->mitigationNums = $map['MitigationNums'];
        }
        if (isset($map['NormalBandwidth'])) {
            $model->normalBandwidth = $map['NormalBandwidth'];
        }

        return $model;
    }
}
