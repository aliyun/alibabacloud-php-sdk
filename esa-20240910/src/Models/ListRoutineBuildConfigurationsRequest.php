<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class ListRoutineBuildConfigurationsRequest extends Model
{
    /**
     * @var string
     */
    public $routineNames;
    protected $_name = [
        'routineNames' => 'RoutineNames',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routineNames) {
            $res['RoutineNames'] = $this->routineNames;
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
        if (isset($map['RoutineNames'])) {
            $model->routineNames = $map['RoutineNames'];
        }

        return $model;
    }
}
