<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class DsgPlatformQueryProjectsAndSchemaFromMetaRequest extends Model
{
    /**
     * @var string
     */
    public $engineName;
    protected $_name = [
        'engineName' => 'EngineName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->engineName) {
            $res['EngineName'] = $this->engineName;
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
        if (isset($map['EngineName'])) {
            $model->engineName = $map['EngineName'];
        }

        return $model;
    }
}
