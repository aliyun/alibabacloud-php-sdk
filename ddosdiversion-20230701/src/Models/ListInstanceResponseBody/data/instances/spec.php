<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models\ListInstanceResponseBody\data\instances;

use AlibabaCloud\Tea\Model;

class spec extends Model
{
    /**
     * @description The region of the asset.
     *
     * @example international_and_hmt
     *
     * @var string
     */
    public $coverage;

    /**
     * @description The diversion mode. Valid values: on-demand always-on
     *
     * @example on-demand
     *
     * @var string
     */
    public $diversionType;

    /**
     * @description The mitigation plan.
     *
     * @example enterprise
     *
     * @var string
     */
    public $edition;

    /**
     * @description The number of data centers. Valid values: 1 to 10.
     *
     * @example 1
     *
     * @var string
     */
    public $idcNumbers;

    /**
     * @description The initial installation mode.
     *
     * @example gre_tunnel_by_pccw
     *
     * @var string
     */
    public $initialInstallation;

    /**
     * @description The initial installation quantity.
     *
     * @example 1
     *
     * @var string
     */
    public $initialQty;

    /**
     * @description The number of CIDR blocks. Value range: 1 to 10000.
     *
     * @example 1
     *
     * @var string
     */
    public $ipSubnetNums;

    /**
     * @description The mitigation analysis feature.
     *
     * @example off
     *
     * @var string
     */
    public $mitigationAnalysis;

    /**
     * @description The log storage capacity.
     *
     * @example 3T
     *
     * @var string
     */
    public $mitigationAnalysisCapacity;

    /**
     * @description The maximum mitigation capability.
     *
     * @example unlimited
     *
     * @var string
     */
    public $mitigationCapacity;

    /**
     * @description The number of mitigation sessions.
     *
     * @example unlimited
     *
     * @var string
     */
    public $mitigationNums;

    /**
     * @description The service traffic. Unit: Mbit/s.
     *
     * @example 100
     *
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
