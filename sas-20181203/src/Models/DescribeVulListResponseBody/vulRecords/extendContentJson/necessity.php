<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords\extendContentJson;

use AlibabaCloud\Tea\Model;

class necessity extends Model
{
    /**
     * @description The name of the operating system for your asset.
     *
     * @example 1
     *
     * @var string
     */
    public $assetsFactor;

    /**
     * @description Indicates whether Security Center is authorized to protect the asset. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example 7.8
     *
     * @var string
     */
    public $cvssFactor;

    /**
     * @description The score of urgency to fix a vulnerability.
     *
     * The following list describes scores and related fixing suggestions:
     *
     *   If the score is from **13.5 to 15**, the vulnerability is a high-risk vulnerability. You must fix the vulnerability at the earliest opportunity.
     *   If the score is **greater than or equal to 7 but less than 13.5**, the vulnerability is a medium-risk vulnerability. You can fix the vulnerability at your convenience.
     *   If the score is **less than 7**, the vulnerability is a low-risk vulnerability. You can ignore the vulnerability.
     *
     * @example 1.0
     *
     * @var string
     */
    public $enviromentFactor;

    /**
     * @description The Common Vulnerability Scoring System (CVSS) score.
     *
     * @example 1
     *
     * @var string
     */
    public $isCalc;

    /**
     * @description The environment score.
     *
     * @example normal
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether the score of urgency to fix a vulnerability is calculated. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1.0
     *
     * @var string
     */
    public $timeFactor;

    /**
     * @description The asset importance score. Valid values:
     *
     *   **2**: an important asset
     *   **1**: a common asset
     *   **0**: a test asset
     *
     * @example 7.8
     *
     * @var string
     */
    public $totalScore;
    protected $_name = [
        'assetsFactor'     => 'Assets_factor',
        'cvssFactor'       => 'Cvss_factor',
        'enviromentFactor' => 'Enviroment_factor',
        'isCalc'           => 'Is_calc',
        'status'           => 'Status',
        'timeFactor'       => 'Time_factor',
        'totalScore'       => 'Total_score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetsFactor) {
            $res['Assets_factor'] = $this->assetsFactor;
        }
        if (null !== $this->cvssFactor) {
            $res['Cvss_factor'] = $this->cvssFactor;
        }
        if (null !== $this->enviromentFactor) {
            $res['Enviroment_factor'] = $this->enviromentFactor;
        }
        if (null !== $this->isCalc) {
            $res['Is_calc'] = $this->isCalc;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeFactor) {
            $res['Time_factor'] = $this->timeFactor;
        }
        if (null !== $this->totalScore) {
            $res['Total_score'] = $this->totalScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return necessity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Assets_factor'])) {
            $model->assetsFactor = $map['Assets_factor'];
        }
        if (isset($map['Cvss_factor'])) {
            $model->cvssFactor = $map['Cvss_factor'];
        }
        if (isset($map['Enviroment_factor'])) {
            $model->enviromentFactor = $map['Enviroment_factor'];
        }
        if (isset($map['Is_calc'])) {
            $model->isCalc = $map['Is_calc'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Time_factor'])) {
            $model->timeFactor = $map['Time_factor'];
        }
        if (isset($map['Total_score'])) {
            $model->totalScore = $map['Total_score'];
        }

        return $model;
    }
}
