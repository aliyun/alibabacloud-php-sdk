<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class DLSerdeInfo extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $deserializerClass;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var int
     */
    public $serdeType;

    /**
     * @var string
     */
    public $serializationLib;

    /**
     * @var string
     */
    public $serializerClass;
    protected $_name = [
        'description' => 'Description',
        'deserializerClass' => 'DeserializerClass',
        'name' => 'Name',
        'parameters' => 'Parameters',
        'serdeType' => 'SerdeType',
        'serializationLib' => 'SerializationLib',
        'serializerClass' => 'SerializerClass',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->deserializerClass) {
            $res['DeserializerClass'] = $this->deserializerClass;
        }

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

        if (null !== $this->serdeType) {
            $res['SerdeType'] = $this->serdeType;
        }

        if (null !== $this->serializationLib) {
            $res['SerializationLib'] = $this->serializationLib;
        }

        if (null !== $this->serializerClass) {
            $res['SerializerClass'] = $this->serializerClass;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DeserializerClass'])) {
            $model->deserializerClass = $map['DeserializerClass'];
        }

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

        if (isset($map['SerdeType'])) {
            $model->serdeType = $map['SerdeType'];
        }

        if (isset($map['SerializationLib'])) {
            $model->serializationLib = $map['SerializationLib'];
        }

        if (isset($map['SerializerClass'])) {
            $model->serializerClass = $map['SerializerClass'];
        }

        return $model;
    }
}
