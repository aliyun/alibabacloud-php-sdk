<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\TableExtended\sd;

use AlibabaCloud\Tea\Model;

class serDeInfo extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $serializationLib;
    protected $_name = [
        'name'             => 'Name',
        'parameters'       => 'Parameters',
        'serializationLib' => 'SerializationLib',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->serializationLib) {
            $res['SerializationLib'] = $this->serializationLib;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serDeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['SerializationLib'])) {
            $model->serializationLib = $map['SerializationLib'];
        }

        return $model;
    }
}
