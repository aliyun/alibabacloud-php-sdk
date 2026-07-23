<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetRoutineBuildRequest extends Model
{
    /**
     * @var int
     */
    public $routineBuildId;
    protected $_name = [
        'routineBuildId' => 'RoutineBuildId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routineBuildId) {
            $res['RoutineBuildId'] = $this->routineBuildId;
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
        if (isset($map['RoutineBuildId'])) {
            $model->routineBuildId = $map['RoutineBuildId'];
        }

        return $model;
    }
}
