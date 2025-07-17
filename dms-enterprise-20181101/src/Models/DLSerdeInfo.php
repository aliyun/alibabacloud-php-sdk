<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
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
            $res['Parameters'] = $this->parameters;
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

    /**
     * @param array $map
     *
     * @return DLSerdeInfo
     */
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
            $model->parameters = $map['Parameters'];
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
