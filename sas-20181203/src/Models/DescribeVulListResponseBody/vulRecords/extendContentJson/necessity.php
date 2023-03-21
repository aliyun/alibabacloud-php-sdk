<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulListResponseBody\vulRecords\extendContentJson;

use AlibabaCloud\Tea\Model;

class necessity extends Model
{
    /**
     * @var string
     */
    public $assetsFactor;

    /**
     * @var string
     */
    public $cvssFactor;

    /**
     * @var string
     */
    public $enviromentFactor;

    /**
     * @var string
     */
    public $isCalc;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $timeFactor;

    /**
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
