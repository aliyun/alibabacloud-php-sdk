<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class Relationship extends Model
{
    /**
     * @var mixed[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $dataChannel;

    /**
     * @var string
     */
    public $relationshipGuid;

    /**
     * @var string
     */
    public $relationshipType;
    protected $_name = [
        'attributes' => 'Attributes',
        'dataChannel' => 'DataChannel',
        'relationshipGuid' => 'RelationshipGuid',
        'relationshipType' => 'RelationshipType',
    ];

    public function validate()
    {
        if (\is_array($this->attributes)) {
            Model::validateArray($this->attributes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            if (\is_array($this->attributes)) {
                $res['Attributes'] = [];
                foreach ($this->attributes as $key1 => $value1) {
                    $res['Attributes'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->dataChannel) {
            $res['DataChannel'] = $this->dataChannel;
        }

        if (null !== $this->relationshipGuid) {
            $res['RelationshipGuid'] = $this->relationshipGuid;
        }

        if (null !== $this->relationshipType) {
            $res['RelationshipType'] = $this->relationshipType;
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
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                foreach ($map['Attributes'] as $key1 => $value1) {
                    $model->attributes[$key1] = $value1;
                }
            }
        }

        if (isset($map['DataChannel'])) {
            $model->dataChannel = $map['DataChannel'];
        }

        if (isset($map['RelationshipGuid'])) {
            $model->relationshipGuid = $map['RelationshipGuid'];
        }

        if (isset($map['RelationshipType'])) {
            $model->relationshipType = $map['RelationshipType'];
        }

        return $model;
    }
}
