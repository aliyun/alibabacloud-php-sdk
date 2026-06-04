<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateMetaEntityShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $attributesShrink;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $customAttributesShrink;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'attributesShrink' => 'Attributes',
        'comment' => 'Comment',
        'customAttributesShrink' => 'CustomAttributes',
        'id' => 'Id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributesShrink) {
            $res['Attributes'] = $this->attributesShrink;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->customAttributesShrink) {
            $res['CustomAttributes'] = $this->customAttributesShrink;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
            $model->attributesShrink = $map['Attributes'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['CustomAttributes'])) {
            $model->customAttributesShrink = $map['CustomAttributes'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
