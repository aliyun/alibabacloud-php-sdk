<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDataQualityAnalysisResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataQualityResult extends Model
{
    /**
     * @description The score. This parameter is applicable to DQR results. The distribution ranges from 1 to 5. A value closer to 1 indicates better data quality. The number of valid digits is kept to four decimal places.
     *
     * @example 1.2345
     *
     * @var float
     */
    public $dataQualityScore;

    /**
     * @description Data quality evaluation indicator 1: activity data credibility.
     *
     * @example 1.2345
     *
     * @var float
     */
    public $g1;

    /**
     * @description Data quality evaluation indicator 2: data factor reliability.
     *
     * @example 1.2345
     *
     * @var float
     */
    public $g2;

    /**
     * @description Data quality evaluation indicator 3: time representativeness.
     *
     * @example 1.2345
     *
     * @var float
     */
    public $g3;

    /**
     * @description Data quality evaluation indicator 4: geographic representativeness.
     *
     * @example 1.2345
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return dataQualityResult
     */
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
