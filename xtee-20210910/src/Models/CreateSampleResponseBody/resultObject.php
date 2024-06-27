<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\CreateSampleResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $communityCount;

    /**
     * @var int
     */
    public $failCount;

    /**
     * @var string
     */
    public $recallProbability;

    /**
     * @var string
     */
    public $riskDensity;

    /**
     * @var int
     */
    public $sampleCount;

    /**
     * @var int
     */
    public $successCount;
    protected $_name = [
        'communityCount'    => 'communityCount',
        'failCount'         => 'failCount',
        'recallProbability' => 'recallProbability',
        'riskDensity'       => 'riskDensity',
        'sampleCount'       => 'sampleCount',
        'successCount'      => 'successCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->communityCount) {
            $res['communityCount'] = $this->communityCount;
        }
        if (null !== $this->failCount) {
            $res['failCount'] = $this->failCount;
        }
        if (null !== $this->recallProbability) {
            $res['recallProbability'] = $this->recallProbability;
        }
        if (null !== $this->riskDensity) {
            $res['riskDensity'] = $this->riskDensity;
        }
        if (null !== $this->sampleCount) {
            $res['sampleCount'] = $this->sampleCount;
        }
        if (null !== $this->successCount) {
            $res['successCount'] = $this->successCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['communityCount'])) {
            $model->communityCount = $map['communityCount'];
        }
        if (isset($map['failCount'])) {
            $model->failCount = $map['failCount'];
        }
        if (isset($map['recallProbability'])) {
            $model->recallProbability = $map['recallProbability'];
        }
        if (isset($map['riskDensity'])) {
            $model->riskDensity = $map['riskDensity'];
        }
        if (isset($map['sampleCount'])) {
            $model->sampleCount = $map['sampleCount'];
        }
        if (isset($map['successCount'])) {
            $model->successCount = $map['successCount'];
        }

        return $model;
    }
}
