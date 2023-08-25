<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class SerDeInfoModel extends Model
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
     * @var int
     */
    public $serDeId;

    /**
     * @var string
     */
    public $serializationLib;
    protected $_name = [
        'name'             => 'Name',
        'parameters'       => 'Parameters',
        'serDeId'          => 'SerDeId',
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
        if (null !== $this->serDeId) {
            $res['SerDeId'] = $this->serDeId;
        }
        if (null !== $this->serializationLib) {
            $res['SerializationLib'] = $this->serializationLib;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SerDeInfoModel
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
        if (isset($map['SerDeId'])) {
            $model->serDeId = $map['SerDeId'];
        }
        if (isset($map['SerializationLib'])) {
            $model->serializationLib = $map['SerializationLib'];
        }

        return $model;
    }
}
