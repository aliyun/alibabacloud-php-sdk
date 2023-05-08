<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRisksResponseBody;

use AlibabaCloud\Tea\Model;

class risks extends Model
{
    /**
     * @description The description of the baseline.
     *
     * @example Ubuntu 14,Ubuntu 16 ,Ubuntu 18,Ubuntu 20 baseline based on Alibaba Cloud best security practices
     *
     * @var string
     */
    public $riskDetail;

    /**
     * @description The ID of the baseline.
     *
     * @example 54
     *
     * @var int
     */
    public $riskId;

    /**
     * @description The name of the baseline.
     *
     * @example Alibaba Cloud Standard - Ubuntu Security Baseline
     *
     * @var string
     */
    public $riskName;

    /**
     * @description The name of the baseline type.
     *
     * @example cis
     *
     * @var string
     */
    public $riskType;

    /**
     * @description The name of the baseline subtype.
     *
     * @example hc_ubuntu
     *
     * @var string
     */
    public $subRiskType;

    /**
     * @description The display name of the baseline subtype.
     *
     * @example Alibaba Cloud Standard - Ubuntu Security Baseline
     *
     * @var string
     */
    public $subTypeAlias;

    /**
     * @description The display name of the baseline type.
     *
     * @example Best security practices
     *
     * @var string
     */
    public $typeAlias;
    protected $_name = [
        'riskDetail'   => 'RiskDetail',
        'riskId'       => 'RiskId',
        'riskName'     => 'RiskName',
        'riskType'     => 'RiskType',
        'subRiskType'  => 'SubRiskType',
        'subTypeAlias' => 'SubTypeAlias',
        'typeAlias'    => 'TypeAlias',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskDetail) {
            $res['RiskDetail'] = $this->riskDetail;
        }
        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }
        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
        }
        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
        }
        if (null !== $this->subRiskType) {
            $res['SubRiskType'] = $this->subRiskType;
        }
        if (null !== $this->subTypeAlias) {
            $res['SubTypeAlias'] = $this->subTypeAlias;
        }
        if (null !== $this->typeAlias) {
            $res['TypeAlias'] = $this->typeAlias;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return risks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskDetail'])) {
            $model->riskDetail = $map['RiskDetail'];
        }
        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }
        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }
        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }
        if (isset($map['SubRiskType'])) {
            $model->subRiskType = $map['SubRiskType'];
        }
        if (isset($map['SubTypeAlias'])) {
            $model->subTypeAlias = $map['SubTypeAlias'];
        }
        if (isset($map['TypeAlias'])) {
            $model->typeAlias = $map['TypeAlias'];
        }

        return $model;
    }
}
