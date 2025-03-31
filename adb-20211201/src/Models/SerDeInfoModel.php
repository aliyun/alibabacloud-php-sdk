<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

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
        'name' => 'Name',
        'parameters' => 'Parameters',
        'serDeId' => 'SerDeId',
        'serializationLib' => 'SerializationLib',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['Parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->serDeId) {
            $res['SerDeId'] = $this->serDeId;
        }

        if (null !== $this->serializationLib) {
            $res['SerializationLib'] = $this->serializationLib;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                foreach ($map['Parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
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
