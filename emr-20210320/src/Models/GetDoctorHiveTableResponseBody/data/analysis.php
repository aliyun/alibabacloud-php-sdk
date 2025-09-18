<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHiveTableResponseBody\data;

use AlibabaCloud\Dara\Model;

class analysis extends Model
{
    /**
     * @var int
     */
    public $hiveDistributionScore;

    /**
     * @var int
     */
    public $hiveFormatScore;

    /**
     * @var int
     */
    public $hiveFrequencyScore;

    /**
     * @var int
     */
    public $hiveScore;
    protected $_name = [
        'hiveDistributionScore' => 'HiveDistributionScore',
        'hiveFormatScore' => 'HiveFormatScore',
        'hiveFrequencyScore' => 'HiveFrequencyScore',
        'hiveScore' => 'HiveScore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
