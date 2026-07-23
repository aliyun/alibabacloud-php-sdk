<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class DeleteRoutineBuildConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $routineName;
    protected $_name = [
        'routineName' => 'RoutineName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routineName) {
            $res['RoutineName'] = $this->routineName;
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
        if (isset($map['RoutineName'])) {
            $model->routineName = $map['RoutineName'];
        }

        return $model;
    }
}
