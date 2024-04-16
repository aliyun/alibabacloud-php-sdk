<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\SqlOutput\schema;

use AlibabaCloud\Tea\Model;

class fields extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $nullable;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'name'     => 'name',
        'nullable' => 'nullable',
        'type'     => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nullable) {
            $res['nullable'] = $this->nullable;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nullable'])) {
            $model->nullable = $map['nullable'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
