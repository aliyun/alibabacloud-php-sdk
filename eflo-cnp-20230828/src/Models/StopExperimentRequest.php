<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Tea\Model;

class StopExperimentRequest extends Model
{
    /**
     * @example 234
     *
     * @var int
     */
    public $experimentId;
    protected $_name = [
        'experimentId' => 'ExperimentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopExperimentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }

        return $model;
    }
}
