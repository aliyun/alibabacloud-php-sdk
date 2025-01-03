<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Tea\Model;

class GetExperimentRequest extends Model
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
     * @return GetExperimentRequest
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
