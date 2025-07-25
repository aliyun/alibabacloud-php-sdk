<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class CreateTrainingJobResponseBody extends Model
{
    /**
     * @example E7C42CC7-2E85-508A-84F4-923B605FD10F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example traineyfz0m2hsfv
     *
     * @var string
     */
    public $trainingJobId;
    protected $_name = [
        'requestId' => 'RequestId',
        'trainingJobId' => 'TrainingJobId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->trainingJobId) {
            $res['TrainingJobId'] = $this->trainingJobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrainingJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrainingJobId'])) {
            $model->trainingJobId = $map['TrainingJobId'];
        }

        return $model;
    }
}
