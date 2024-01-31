<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class ExportModelFeatureTrainingSetFGTableResponseBody extends Model
{
    /**
     * @example 3
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 514F82AF-3C04-5C3D-8F38-A11261BF37B0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'taskId'    => 'TaskId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportModelFeatureTrainingSetFGTableResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
