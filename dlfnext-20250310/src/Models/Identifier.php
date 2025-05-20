<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class Identifier extends Model
{
    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $object;
    protected $_name = [
        'database' => 'database',
        'object' => 'object',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->database) {
            $res['database'] = $this->database;
        }

        if (null !== $this->object) {
            $res['object'] = $this->object;
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
        if (isset($map['database'])) {
            $model->database = $map['database'];
        }

        if (isset($map['object'])) {
            $model->object = $map['object'];
        }

        return $model;
    }
}
