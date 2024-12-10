<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody;

use AlibabaCloud\Tea\Model;

class scheduler extends Model
{
    /**
     * @var string
     */
    public $maxRunningTimeInMinutes;

    /**
     * @example 0
     *
     * @var string
     */
    public $maxRunningTimeInSeconds;
    protected $_name = [
        'maxRunningTimeInMinutes' => 'MaxRunningTimeInMinutes',
        'maxRunningTimeInSeconds' => 'MaxRunningTimeInSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxRunningTimeInMinutes) {
            $res['MaxRunningTimeInMinutes'] = $this->maxRunningTimeInMinutes;
        }
        if (null !== $this->maxRunningTimeInSeconds) {
            $res['MaxRunningTimeInSeconds'] = $this->maxRunningTimeInSeconds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduler
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxRunningTimeInMinutes'])) {
            $model->maxRunningTimeInMinutes = $map['MaxRunningTimeInMinutes'];
        }
        if (isset($map['MaxRunningTimeInSeconds'])) {
            $model->maxRunningTimeInSeconds = $map['MaxRunningTimeInSeconds'];
        }

        return $model;
    }
}
