<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\BatchCreateMetaEntitiesRequest;

use AlibabaCloud\Dara\Model;

class entities extends Model
{
    /**
     * @var string[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string[][]
     */
    public $customAttributes;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'attributes' => 'Attributes',
        'comment' => 'Comment',
        'customAttributes' => 'CustomAttributes',
        'entityType' => 'EntityType',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->attributes)) {
            Model::validateArray($this->attributes);
        }
        if (\is_array($this->customAttributes)) {
            Model::validateArray($this->customAttributes);
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

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->customAttributes) {
            if (\is_array($this->customAttributes)) {
                $res['CustomAttributes'] = [];
                foreach ($this->customAttributes as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['CustomAttributes'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['CustomAttributes'][$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['CustomAttributes'])) {
            if (!empty($map['CustomAttributes'])) {
                $model->customAttributes = [];
                foreach ($map['CustomAttributes'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->customAttributes[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->customAttributes[$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
