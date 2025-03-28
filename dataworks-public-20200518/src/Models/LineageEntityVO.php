<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class LineageEntityVO extends Model
{
    /**
     * @var string[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $detailUrl;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $parentName;

    /**
     * @var string
     */
    public $qualifiedName;
    protected $_name = [
        'attributes' => 'Attributes',
        'detailUrl' => 'DetailUrl',
        'entityType' => 'EntityType',
        'name' => 'Name',
        'owner' => 'Owner',
        'parentName' => 'ParentName',
        'qualifiedName' => 'QualifiedName',
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

        if (null !== $this->detailUrl) {
            $res['DetailUrl'] = $this->detailUrl;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->parentName) {
            $res['ParentName'] = $this->parentName;
        }

        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
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

        if (isset($map['DetailUrl'])) {
            $model->detailUrl = $map['DetailUrl'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['ParentName'])) {
            $model->parentName = $map['ParentName'];
        }

        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }

        return $model;
    }
}
