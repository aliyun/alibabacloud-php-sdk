<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachScriptPageResponseBody\list_;

use AlibabaCloud\Tea\Model;

class weights extends Model
{
    /**
     * @example 50
     *
     * @var int
     */
    public $assessmentPoint;

    /**
     * @example 30
     *
     * @var int
     */
    public $expressiveness;

    /**
     * @example 20
     *
     * @var int
     */
    public $standard;

    /**
     * @example true
     *
     * @var bool
     */
    public $standardEnabled;
    protected $_name = [
        'assessmentPoint' => 'assessmentPoint',
        'expressiveness'  => 'expressiveness',
        'standard'        => 'standard',
        'standardEnabled' => 'standardEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assessmentPoint) {
            $res['assessmentPoint'] = $this->assessmentPoint;
        }
        if (null !== $this->expressiveness) {
            $res['expressiveness'] = $this->expressiveness;
        }
        if (null !== $this->standard) {
            $res['standard'] = $this->standard;
        }
        if (null !== $this->standardEnabled) {
            $res['standardEnabled'] = $this->standardEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return weights
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assessmentPoint'])) {
            $model->assessmentPoint = $map['assessmentPoint'];
        }
        if (isset($map['expressiveness'])) {
            $model->expressiveness = $map['expressiveness'];
        }
        if (isset($map['standard'])) {
            $model->standard = $map['standard'];
        }
        if (isset($map['standardEnabled'])) {
            $model->standardEnabled = $map['standardEnabled'];
        }

        return $model;
    }
}
