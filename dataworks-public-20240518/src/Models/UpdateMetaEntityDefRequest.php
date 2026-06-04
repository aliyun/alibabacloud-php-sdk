<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateMetaEntityDefRequest extends Model
{
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
     * @var MetaEntityAttributeDef[]
     */
    public $newAttributeDefs;

    /**
     * @var MetaEntityAttributeDef[]
     */
    public $updateAttributeDefs;
    protected $_name = [
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'entityType' => 'EntityType',
        'newAttributeDefs' => 'NewAttributeDefs',
        'updateAttributeDefs' => 'UpdateAttributeDefs',
    ];

    public function validate()
    {
        if (\is_array($this->newAttributeDefs)) {
            Model::validateArray($this->newAttributeDefs);
        }
        if (\is_array($this->updateAttributeDefs)) {
            Model::validateArray($this->updateAttributeDefs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->newAttributeDefs) {
            if (\is_array($this->newAttributeDefs)) {
                $res['NewAttributeDefs'] = [];
                $n1 = 0;
                foreach ($this->newAttributeDefs as $item1) {
                    $res['NewAttributeDefs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateAttributeDefs) {
            if (\is_array($this->updateAttributeDefs)) {
                $res['UpdateAttributeDefs'] = [];
                $n1 = 0;
                foreach ($this->updateAttributeDefs as $item1) {
                    $res['UpdateAttributeDefs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['NewAttributeDefs'])) {
            if (!empty($map['NewAttributeDefs'])) {
                $model->newAttributeDefs = [];
                $n1 = 0;
                foreach ($map['NewAttributeDefs'] as $item1) {
                    $model->newAttributeDefs[$n1] = MetaEntityAttributeDef::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UpdateAttributeDefs'])) {
            if (!empty($map['UpdateAttributeDefs'])) {
                $model->updateAttributeDefs = [];
                $n1 = 0;
                foreach ($map['UpdateAttributeDefs'] as $item1) {
                    $model->updateAttributeDefs[$n1] = MetaEntityAttributeDef::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
