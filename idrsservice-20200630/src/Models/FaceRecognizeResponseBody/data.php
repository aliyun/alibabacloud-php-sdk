<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\FaceRecognizeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example T
     *
     * @var string
     */
    public $comparePassed;

    /**
     * @example 32.435
     *
     * @var float
     */
    public $compareScore;

    /**
     * @example T
     *
     * @var string
     */
    public $livenessPassed;

    /**
     * @example 56.34
     *
     * @var float
     */
    public $livenessScore;
    protected $_name = [
        'comparePassed'  => 'ComparePassed',
        'compareScore'   => 'CompareScore',
        'livenessPassed' => 'LivenessPassed',
        'livenessScore'  => 'LivenessScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comparePassed) {
            $res['ComparePassed'] = $this->comparePassed;
        }
        if (null !== $this->compareScore) {
            $res['CompareScore'] = $this->compareScore;
        }
        if (null !== $this->livenessPassed) {
            $res['LivenessPassed'] = $this->livenessPassed;
        }
        if (null !== $this->livenessScore) {
            $res['LivenessScore'] = $this->livenessScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComparePassed'])) {
            $model->comparePassed = $map['ComparePassed'];
        }
        if (isset($map['CompareScore'])) {
            $model->compareScore = $map['CompareScore'];
        }
        if (isset($map['LivenessPassed'])) {
            $model->livenessPassed = $map['LivenessPassed'];
        }
        if (isset($map['LivenessScore'])) {
            $model->livenessScore = $map['LivenessScore'];
        }

        return $model;
    }
}
