<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class MetaEntity extends Model
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
     * @var int
     */
    public $createTime;

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
    public $id;

    /**
     * @var MetaEntityDef
     */
    public $metaEntityDef;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerId;
    protected $_name = [
        'attributes' => 'Attributes',
        'comment' => 'Comment',
        'createTime' => 'CreateTime',
        'customAttributes' => 'CustomAttributes',
        'entityType' => 'EntityType',
        'id' => 'Id',
        'metaEntityDef' => 'MetaEntityDef',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->attributes)) {
            Model::validateArray($this->attributes);
        }
        if (\is_array($this->customAttributes)) {
            Model::validateArray($this->customAttributes);
        }
        if (null !== $this->metaEntityDef) {
            $this->metaEntityDef->validate();
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

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->metaEntityDef) {
            $res['MetaEntityDef'] = null !== $this->metaEntityDef ? $this->metaEntityDef->toArray($noStream) : $this->metaEntityDef;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MetaEntityDef'])) {
            $model->metaEntityDef = MetaEntityDef::fromMap($map['MetaEntityDef']);
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
