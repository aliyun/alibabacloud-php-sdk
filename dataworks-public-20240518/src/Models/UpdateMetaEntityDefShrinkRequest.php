<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateMetaEntityDefShrinkRequest extends Model
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
     * @var string
     */
    public $newAttributeDefsShrink;

    /**
     * @var string
     */
    public $updateAttributeDefsShrink;
    protected $_name = [
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'entityType' => 'EntityType',
        'newAttributeDefsShrink' => 'NewAttributeDefs',
        'updateAttributeDefsShrink' => 'UpdateAttributeDefs',
    ];

    public function validate()
    {
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

        if (null !== $this->newAttributeDefsShrink) {
            $res['NewAttributeDefs'] = $this->newAttributeDefsShrink;
        }

        if (null !== $this->updateAttributeDefsShrink) {
            $res['UpdateAttributeDefs'] = $this->updateAttributeDefsShrink;
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
            $model->newAttributeDefsShrink = $map['NewAttributeDefs'];
        }

        if (isset($map['UpdateAttributeDefs'])) {
            $model->updateAttributeDefsShrink = $map['UpdateAttributeDefs'];
        }

        return $model;
    }
}
