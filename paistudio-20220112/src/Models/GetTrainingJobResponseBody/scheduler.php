<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody;

use AlibabaCloud\Dara\Model;

class scheduler extends Model
{
    /**
     * @var string
     */
    public $maxRunningTimeInMinutes;
    /**
     * @var string
     */
    public $maxRunningTimeInSeconds;
    protected $_name = [
        'maxRunningTimeInMinutes' => 'MaxRunningTimeInMinutes',
        'maxRunningTimeInSeconds' => 'MaxRunningTimeInSeconds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
