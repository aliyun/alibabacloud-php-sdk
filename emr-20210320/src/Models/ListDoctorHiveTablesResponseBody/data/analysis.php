<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHiveTablesResponseBody\data;

use AlibabaCloud\Tea\Model;

class analysis extends Model
{
    /**
     * @description The score for the file sizes of the Hive table.
     *
     * @example 80
     *
     * @var int
     */
    public $hiveDistributionScore;

    /**
     * @description The score for the data formats of the Hive table.
     *
     * @example 60
     *
     * @var int
     */
    public $hiveFormatScore;

    /**
     * @description The score for the access frequency of the Hive table.
     *
     * @example 70
     *
     * @var int
     */
    public $hiveFrequencyScore;

    /**
     * @description The overall score of the Hive table.
     *
     * @example 80
     *
     * @var int
     */
    public $hiveScore;
    protected $_name = [
        'hiveDistributionScore' => 'HiveDistributionScore',
        'hiveFormatScore'       => 'HiveFormatScore',
        'hiveFrequencyScore'    => 'HiveFrequencyScore',
        'hiveScore'             => 'HiveScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hiveDistributionScore) {
            $res['HiveDistributionScore'] = $this->hiveDistributionScore;
        }
        if (null !== $this->hiveFormatScore) {
            $res['HiveFormatScore'] = $this->hiveFormatScore;
        }
        if (null !== $this->hiveFrequencyScore) {
            $res['HiveFrequencyScore'] = $this->hiveFrequencyScore;
        }
        if (null !== $this->hiveScore) {
            $res['HiveScore'] = $this->hiveScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return analysis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HiveDistributionScore'])) {
            $model->hiveDistributionScore = $map['HiveDistributionScore'];
        }
        if (isset($map['HiveFormatScore'])) {
            $model->hiveFormatScore = $map['HiveFormatScore'];
        }
        if (isset($map['HiveFrequencyScore'])) {
            $model->hiveFrequencyScore = $map['HiveFrequencyScore'];
        }
        if (isset($map['HiveScore'])) {
            $model->hiveScore = $map['HiveScore'];
        }

        return $model;
    }
}
