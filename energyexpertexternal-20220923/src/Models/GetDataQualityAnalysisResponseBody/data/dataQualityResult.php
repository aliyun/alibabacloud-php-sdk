<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody\data;

use AlibabaCloud\Dara\Model;

class dataQualityResult extends Model
{
    /**
     * @var float
     */
    public $dataQualityScore;
    /**
     * @var float
     */
    public $g1;
    /**
     * @var float
     */
    public $g2;
    /**
     * @var float
     */
    public $g3;
    /**
     * @var float
     */
    public $g4;
    protected $_name = [
        'dataQualityScore' => 'data_quality_score',
        'g1'               => 'g1',
        'g2'               => 'g2',
        'g3'               => 'g3',
        'g4'               => 'g4',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQualityScore) {
            $res['data_quality_score'] = $this->dataQualityScore;
        }

        if (null !== $this->g1) {
            $res['g1'] = $this->g1;
        }

        if (null !== $this->g2) {
            $res['g2'] = $this->g2;
        }

        if (null !== $this->g3) {
            $res['g3'] = $this->g3;
        }

        if (null !== $this->g4) {
            $res['g4'] = $this->g4;
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
        if (isset($map['data_quality_score'])) {
            $model->dataQualityScore = $map['data_quality_score'];
        }

        if (isset($map['g1'])) {
            $model->g1 = $map['g1'];
        }

        if (isset($map['g2'])) {
            $model->g2 = $map['g2'];
        }

        if (isset($map['g3'])) {
            $model->g3 = $map['g3'];
        }

        if (isset($map['g4'])) {
            $model->g4 = $map['g4'];
        }

        return $model;
    }
}
