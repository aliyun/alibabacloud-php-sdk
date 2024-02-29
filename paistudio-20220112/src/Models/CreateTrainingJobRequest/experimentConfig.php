<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest;

use AlibabaCloud\Tea\Model;

class experimentConfig extends Model
{
    /**
     * @var string
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
     * @return experimentConfig
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
