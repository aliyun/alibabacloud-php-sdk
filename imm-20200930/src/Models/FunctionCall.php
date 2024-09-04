<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class FunctionCall extends Model
{
    /**
     * @var string
     */
    public $arguments;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'arguments' => 'Arguments',
        'name'      => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arguments) {
            $res['Arguments'] = $this->arguments;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FunctionCall
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arguments'])) {
            $model->arguments = $map['Arguments'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
