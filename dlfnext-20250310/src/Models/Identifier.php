<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return Identifier
     */
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
