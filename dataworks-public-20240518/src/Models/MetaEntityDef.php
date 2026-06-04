<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class MetaEntityDef extends Model
{
    /**
     * @var MetaEntityAttributeDef[]
     */
    public $attributeDefs;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $extend;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'attributeDefs' => 'AttributeDefs',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'entityType' => 'EntityType',
        'extend' => 'Extend',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->attributeDefs)) {
            Model::validateArray($this->attributeDefs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeDefs) {
            if (\is_array($this->attributeDefs)) {
                $res['AttributeDefs'] = [];
                $n1 = 0;
                foreach ($this->attributeDefs as $item1) {
                    $res['AttributeDefs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
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
        if (isset($map['AttributeDefs'])) {
            if (!empty($map['AttributeDefs'])) {
                $model->attributeDefs = [];
                $n1 = 0;
                foreach ($map['AttributeDefs'] as $item1) {
                    $model->attributeDefs[$n1] = MetaEntityAttributeDef::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
